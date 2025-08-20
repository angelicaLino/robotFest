<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página de inicio pública
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// 🔹 Rutas de autenticación (login, register, forgot password, etc.)
// Esto es lo que crea Breeze automáticamente
require __DIR__ . '/auth.php';

// 🔹 Dashboard (solo usuarios autenticados y verificados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 🔹 Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ROLES
    Route::resource('roles', RolController::class)->parameters(['roles' => 'rol']);
    Route::put('/roles/{id}/restore', [RolController::class, 'restore'])->name('roles.restore');
    Route::post('/roles/{id}/delete', [RolController::class, 'delete'])->name('roles.delete');


    // USUARIOS
    Route::resource('usuarios', UsuarioController::class);
});
