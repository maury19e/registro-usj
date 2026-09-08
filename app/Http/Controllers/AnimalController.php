<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = session('animales', []);

        return view('animales.index', compact('animales'));
    }
    public function create()
    {
        return view('animales.create');
    }

    public function store(Request $request)
    {
        $animales = session('animales', []);

        $nuevoAnimal = [
            'id' => empty($animales) ? 1 : max(array_column($animales, 'id')) + 1,
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'edad' => $request->edad,
        ];

        $animales[] = $nuevoAnimal;

        session(['animales' => $animales]);

        return redirect('/animales');
    }
    public function edit($id)
    {
        $animales = session('animales', []);

        $animal = collect($animales)->firstWhere('id', $id);

        return view('animales.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animales = session('animales', []);

        foreach ($animales as &$animal) {
            if ($animal['id'] == $id) {
                $animal['nombre'] = $request->nombre;
                $animal['especie'] = $request->especie;
                $animal['edad'] = $request->edad;
            }
        }

        session(['animales' => $animales]);

        return redirect('/animales');
    }
    public function destroy($id)
    {
        $animales = session('animales', []);

        $animales = array_filter($animales, function ($animal) use ($id) {
            return $animal['id'] != $id;
        });

        session(['animales' => array_values($animales)]);

        return redirect('/animales');
    }
}