<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InscripcionController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  
    

    Route::resource('usuarios', UsuarioController::class);
    Route::resource('equipos', EquipoController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('inscripciones', InscripcionController::class)->middleware('auth');

});



require __DIR__.'/auth.php';

