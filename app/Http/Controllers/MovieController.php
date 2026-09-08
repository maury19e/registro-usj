<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Inicializar las películas en la sesión si no existen
     */
    private function initializeMovies(): void
    {
        if (!session()->has('movies')) {
            $movies = [
                [
                    'id' => 1,
                    'title' => 'The Shawshank Redemption',
                    'genre' => 'Drama',
                    'year' => 1994,
                ],
                [
                    'id' => 2,
                    'title' => 'The Godfather',
                    'genre' => 'Crime',
                    'year' => 1972,
                ],
                [
                    'id' => 3,
                    'title' => 'The Dark Knight',
                    'genre' => 'Action',
                    'year' => 2008,
                ],
                [
                    'id' => 4,
                    'title' => 'Pulp Fiction',
                    'genre' => 'Crime',
                    'year' => 1994,
                ],
                [
                    'id' => 5,
                    'title' => 'Forrest Gump',
                    'genre' => 'Drama',
                    'year' => 1994,
                ],
            ];

            session()->put('movies', $movies);
        }
    }

    /**
     * Mostrar el listado de películas
     */
    public function index()
    {
        $this->initializeMovies();
        $movies = session('movies');

        return view('movies.index', compact('movies'));
    }

    /**
     * Mostrar el formulario de edición de una película
     */
    public function edit($id)
    {
        $this->initializeMovies();
        $movies = session('movies');

        // Buscar la película por ID
        $movie = collect($movies)->firstWhere('id', $id);

        if (!$movie) {
            abort(404, 'Película no encontrada');
        }

        return view('movies.edit', compact('movie'));
    }

    /**
     * Actualizar una película (simulado sin persistencia en BD)
     */
    public function update($id, Request $request)
    {
        $this->initializeMovies();

        // En una aplicación real, aquí se actualizarían los datos en la BD
        // En este caso, es solo para demostrar el flujo PUT + CSRF + @method

        return redirect()->route('movies.index')->with('success', 'Película actualizada correctamente');
    }

    /**
     * Guardar una nueva película en la sesión
     */
    public function store(Request $request)
    {
        $this->initializeMovies();
        $movies = session('movies');

        // Validar datos
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'year' => 'required|integer|min:1800|max:2100',
        ]);

        // Generar nuevo ID
        $newId = max(array_column($movies, 'id')) + 1;

        // Agregar película a la sesión
        $movies[] = [
            'id' => $newId,
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'year' => $validated['year'],
        ];

        session()->put('movies', $movies);

        return redirect()->route('movies.index')->with('success', 'Película agregada correctamente');
    }
