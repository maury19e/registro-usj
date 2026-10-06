<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarPersonasController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AnimalController;
//router::get('/', function () {
//    return view('welcome');
//});

//trabajo de animales
//prefix sirve para agrupar rutas bajo un mismo prefijo, en este caso, todas las rutas relacionadas con animales estarán bajo el prefijo '/'. Esto significa que las rutas definidas dentro de este grupo se accederán a través de URLs que comienzan con '/'.
/*Route::prefix('/')->group(function () {
    Route::get('/', [AnimalController::class, 'index'])->name('animales.index');
    Route::get('/create', [AnimalController::class, 'create'])->name('animales.create');
    Route::post('/', [AnimalController::class, 'store'])->name('animales.store');
    Route::get('/{id}/edit', [AnimalController::class, 'edit'])->name('animales.edit')->where('id', '[0-9]+');//where('id', '[0-9]+') es una restricción de ruta que asegura que el parámetro {id} solo acepte valores numéricos. Esto significa que la ruta /{id}/edit solo se activará si {id} es un número, evitando así posibles errores o accesos no deseados a rutas con identificadores no válidos.
    Route::put('/{id}', [AnimalController::class, 'update'])->name('animales.update');
    Route::delete('/{id}', [AnimalController::class, 'destroy'])->name('animales.destroy');
});*/

//resource controller es una forma más concisa de definir rutas para un controlador que sigue las convenciones RESTful. En lugar de definir cada ruta individualmente, puedes usar Route::resource para generar automáticamente todas las rutas necesarias para las acciones CRUD (Create, Read, Update, Delete) del controlador. En este caso, se está generando un conjunto completo de rutas para el AnimalController, excepto la acción 'show', que se excluye con except(['show']).
Route::resource('animales', AnimalController::class)->except(['show']);
//vieja
//Route::get('/animales', [AnimalController::class, 'index'])->name('animales.index');
//Route::get('/animales/create', [AnimalController::class, 'create'])->name('animales.create');
//Route::post('/animales', [AnimalController::class, 'store'])->name('animales.store');
//Route::get('/animales/{id}/edit', [AnimalController::class, 'edit'])->name('animales.edit');
//Route::put('/animales/{id}', [AnimalController::class, 'update'])->name('animales.update');
//Route::delete('/animales/{id}', [AnimalController::class, 'destroy'])->name('animales.destroy');
//trabajo de personas
Route::get('/personas', [ListarPersonasController::class, 'index']);
/*trabajo de peliculas
Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit')->where('id', '[0-9]+');
    Route::put('/{id}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');
});

*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

