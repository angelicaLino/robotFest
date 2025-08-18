<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RoleController;




// Página pública de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Ruta auth
Route::get('/auth/login', function () {
    return view('auth');
})->name('auth');

// Dashboard (solo usuarios autenticados y verificados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Recursos del sistema
 
    Route::resource('roles', RoleController::class);
});

require __DIR__.'/auth.php';
