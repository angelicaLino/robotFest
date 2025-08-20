<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competencias = Competencia::with(['evento', 'categoria'])->get();
        return view('competencias.index', compact('competencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventos = Evento::all();
        $categorias = Categoria::all();
        return view('competencias.create', compact('eventos', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'evento_id' => 'required|exists:eventos,id',
            'categoria_id' => 'required|exists:categorias,id',
            'estado' => 'required|string',
        ]);

        Competencia::create($request->all());

        return redirect()->route('competencias.index')->with('success', 'Competencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Competencia $competencia)
    {
        return view('competencias.show', compact('competencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competencia $competencia)
    {
        $eventos = Evento::all();
        $categorias = Categoria::all();
        return view('competencias.edit', compact('competencia', 'eventos', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competencia $competencia)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'evento_id' => 'required|exists:eventos,id',
            'categoria_id' => 'required|exists:categorias,id',
            'estado' => 'required|string',
        ]);

        $competencia->update($request->all());

        return redirect()->route('competencias.index')->with('success', 'Competencia actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competencia $competencia)
    {
        $competencia->delete();
        return redirect()->route('competencias.index')->with('success', 'Competencia eliminada correctamente.');
    }
}
