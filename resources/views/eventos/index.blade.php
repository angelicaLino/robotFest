<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::with('categorias')->get();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('eventos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo,eliminado',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
        ]);

        $evento = Evento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'estado' => $request->estado,
        ]);

        $evento->categorias()->attach($request->categorias);

        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente');
    }

    public function edit(Evento $evento)
    {
        $categorias = Categoria::all();
        return view('eventos.edit', compact('evento', 'categorias'));
    }

    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo,eliminado',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
        ]);

        $evento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'estado' => $request->estado,
        ]);

        $evento->categorias()->sync($request->categorias);

        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente');
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente');
    }
}
