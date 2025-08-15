<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with('categoria', 'integrantes')->get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
{
    $categorias = Categoria::all();
    $usuarios = \App\Models\User::all(); // Trae todos los usuarios
    return view('equipos.create', compact('categorias', 'usuarios'));
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'categoria_id' => 'required|exists:categorias,id',
        'integrantes' => 'required|array',
        'integrantes.*' => 'exists:users,id',
    ]);

    // Crear equipo
    $equipo = Equipo::create([
        'nombre' => $request->nombre,
        'categoria_id' => $request->categoria_id,
    ]);

    // Guardar integrantes
    foreach($request->integrantes as $idusuario){
        \App\Models\IntegranteEquipo::create([
            'idusuario' => $idusuario,
            'idequipo' => $equipo->id,
        ]);
    }

    return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente con sus integrantes');
}

}
