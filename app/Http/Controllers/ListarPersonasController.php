<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarPersonasController extends Controller
{
    //retorna un array de los nombres de las personas
    public function index()
    {
        $personas = [
            ['nombre' => 'Juan', 'edad' => 30],
            ['nombre' => 'María', 'edad' => 25],
            ['nombre' => 'Pedro', 'edad' => 40],
        ];
        return response()->json($personas);
    }
}
