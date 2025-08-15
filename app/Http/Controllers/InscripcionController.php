<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Equipo;
use App\Models\Evento;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with(['equipo', 'evento'])->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $equipos = Equipo::all();
        $eventos = Evento::all(); // Por ahora estará vacío
        return view('inscripciones.create', compact('equipos', 'eventos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required|string',
            'fecha' => 'required|date',
            'equipo_id' => 'required|exists:equipos,id',
            'evento_id' => 'nullable|exists:eventos,id',
        ]);

        Inscripcion::create($request->all());

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción creada correctamente.');
    }

    public function edit(Inscripcion $inscripcion)
    {
        $equipos = Equipo::all();
        $eventos = Evento::all();
        return view('inscripciones.edit', compact('inscripcion', 'equipos', 'eventos'));
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        $request->validate([
            'estado' => 'required|string',
            'fecha' => 'required|date',
            'equipo_id' => 'required|exists:equipos,id',
            'evento_id' => 'nullable|exists:eventos,id',
        ]);

        $inscripcion->update($request->all());

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción actualizada correctamente.');
    }

    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('inscripciones.index')->with('success', 'Inscripción eliminada correctamente.');
    }
}
