<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // Mostrar todos los eventos (solo activos e inactivos)
    public function index()
    {
        $eventos = Evento::with('categorias')
            ->whereIn('estado', ['activo','inactivo'])
            ->orderBy('fecha', 'asc')
            ->get();

        return view('eventos.index', compact('eventos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        $categorias = Categoria::all();
        return view('eventos.create', compact('categorias'));
    }

    // Guardar nuevo evento
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
            'estado' => 'required|in:activo,inactivo',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
        ]);

        // Crear evento
        $evento = Evento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'estado' => $request->estado,
        ]);

        // Asociar categorías
        $evento->categorias()->attach($request->categorias);

        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente');
    }

    // Mostrar formulario de edición
    public function edit(Evento $evento)
    {
        $categorias = Categoria::all();
        return view('eventos.edit', compact('evento', 'categorias'));
    }

    // Actualizar evento
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'ubicacion' => 'required|string|max:255',
            'estado' => 'required|in:activo,inactivo',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
        ]);

        // Actualizar evento
        $evento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'ubicacion' => $request->ubicacion,
            'estado' => $request->estado,
        ]);

        // Sincronizar categorías
        $evento->categorias()->sync($request->categorias);

        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente');
    }

    // Eliminación lógica (cambiar estado a 'eliminado')
    public function destroy(Evento $evento)
    {
        $evento->update(['estado' => 'eliminado']);
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente');
    }
}

