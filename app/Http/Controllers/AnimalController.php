<?php

namespace App\Http\Controllers;

use App\Http\Requests\animalDataRequest;
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

    public function store(animalDataRequest $request)
    {
        $animales = session('animales', []);
        $validatedData = $request->validated();
        $nuevoAnimal = [
            'id' => empty($animales) ? 1 : max(array_column($animales, 'id')) + 1,
            'nombre' => $validatedData['nombre'],
            'especie' => $validatedData['especie'],
            'edad' => $validatedData['edad'],
        ];

        $animales[] = $nuevoAnimal;

        session(['animales' => $animales]);

        return redirect()->route('animales.index');
    }
    public function edit($id)
    {
        $animales = session('animales', []);

        $animal = collect($animales)->firstWhere('id', $id);

        return view('animales.edit', compact('animal'));
    }

    public function update(animalDataRequest $request, $id)
    {
        $animales = session('animales', []);
        $validatedData = $request->validated();
        foreach ($animales as &$animal) {
            if ($animal['id'] == $id) {
                $animal['nombre'] = $validatedData['nombre'];
                $animal['especie'] = $validatedData['especie'];
                $animal['edad'] = $validatedData['edad'];
            }
        }

        session(['animales' => $animales]);

        return redirect()->route('animales.index');
    }
    public function destroy($id)
    {
        $animales = session('animales', []);

        $animales = array_filter($animales, function ($animal) use ($id) {
            return $animal['id'] != $id;
        });

        session(['animales' => array_values($animales)]);

        return redirect()->route('animales.index');
    }
}