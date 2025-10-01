<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\InscripcionController;


require __DIR__ . '/auth.php';



// 🌐 Páginas públicas
Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'inicio')->name('public.inicio');
    Route::get('/contacto', 'contacto')->name('public.contacto');
    Route::get('/equipo', 'equipo')->name('public.equipo');
    Route::get('/acerca-de', 'acerca')->name('public.acerca');
    Route::get('/equipos', 'equipos')->name('public.equipos');

    Route::get('/categorias', 'categorias')->name('public.categorias');

    Route::get('/eventos', 'eventos')->name('public.eventos');
    Route::get('/evento/{id}', 'evento')->name('public.evento'); 
});

// 🔒 Área privada - Rutas protegidas por autenticación
//Route::middleware(['auth'])->group(function () {
Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['verified'])
    ->name('dashboard');

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
    Route::put('/usuarios/{id}/restore', [UsuarioController::class, 'restore'])->name('usuarios.restore');
    Route::post('/usuarios/{id}/delete', [UsuarioController::class, 'delete'])->name('usuarios.delete');


    // CATEGORIAS
    Route::resource('categorias', CategoriaController::class);
    Route::put('/categorias/{id}/restore', [CategoriaController::class, 'restore'])->name('categorias.restore');
    Route::post('/categorias/{id}/delete', [CategoriaController::class, 'delete'])->name('categorias.delete');


    // EVENTOS
    Route::resource('eventos', App\Http\Controllers\EventoController::class);

    // COMPETENCIAS
    Route::resource('competencias', App\Http\Controllers\CompetenciaController::class);

    
    // EQUIPOS
    Route::resource('equipos', App\Http\Controllers\EquipoController::class);

    
    // Inscripciones
    Route::resource('inscripciones', InscripcionController::class);
    Route::put('/inscripciones/{id}/aprobar', [InscripcionController::class, 'aprobar'])->name('inscripciones.aprobar');
    Route::put('/inscripciones/{id}/rechazar', [InscripcionController::class, 'rechazar'])->name('inscripciones.rechazar');

});
