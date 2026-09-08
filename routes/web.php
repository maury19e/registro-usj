<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarPersonasController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AnimalController;
Route::get('/', function () {
    return view('welcome');
});
//trabajo de animales
Route::get('/animales', [AnimalController::class, 'index']);
Route::get('/animales/create', [AnimalController::class, 'create']);
Route::post('/animales', [AnimalController::class, 'store']);
Route::get('/animales/{id}/edit', [AnimalController::class, 'edit']);
Route::put('/animales/{id}', [AnimalController::class, 'update']);
Route::delete('/animales/{id}', [AnimalController::class, 'destroy']);

Route::get('/personas', [ListarPersonasController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');

Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

