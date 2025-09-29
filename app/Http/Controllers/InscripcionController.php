<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Categoria;
use App\Models\Competencia;

class InscripcionController extends Controller
{
    public function index()
    {
        // Todos para admin, solo suyos para estudiantes
        if(auth()->user()->rol->nombre == 'admin'){
            $inscripciones = Inscripcion::with(['categoria','competencia','user'])->get();
        } else {
            $inscripciones = Inscripcion::with(['categoria','competencia'])
                                        ->where('user_id', auth()->id())
                                        ->get();
        }

        return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $competencias = Competencia::all();
        return view('inscripciones.create', compact('categorias','competencias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_equipo' => 'required|string|max:255',
            'participantes' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'competencia_id' => 'required|exists:competencias,id',
            'foto_robot' => 'nullable|image|max:2048',
        ]);

        $fotoPath = null;
        if($request->hasFile('foto_robot')){
            $fotoPath = $request->file('foto_robot')->store('robots','public');
        }

        Inscripcion::create([
            'user_id' => auth()->id(),
            'nombre_equipo' => $request->nombre_equipo,
            'participantes' => $request->participantes,
            'fecha_inscripcion' => now(),
            'foto_robot' => $fotoPath,
            'categoria_id' => $request->categoria_id,
            'competencia_id' => $request->competencia_id,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('inscripciones.index')->with('success','Inscripción enviada correctamente');
    }

    // Aprobar
    public function aprobar($id){
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->estado = 'aprobado';
        $inscripcion->save();
        return redirect()->back()->with('success','Inscripción aprobada');
    }

    // Rechazar
    public function rechazar($id){
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->estado = 'rechazado';
        $inscripcion->save();
        return redirect()->back()->with('success','Inscripción rechazada');
    }
}
