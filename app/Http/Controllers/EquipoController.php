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
        $categorias = Categoria::all();
        return view('equipos.index', compact('equipos', 'categorias'));
    }


        public function create()
    {
        $categorias = Categoria::all(); // Obtener todas las categorías
        return view('equipos.create', compact('categorias'));
    }   
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Equipo::create([
            'nombre' => $request->nombre,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente');
    }

    public function edit(Equipo $equipo)
    {
        $categorias = Categoria::all();
        $usuarios = User::all();

        return view('equipos.edit', compact('equipo', 'categorias', 'usuarios'));
    }

}
