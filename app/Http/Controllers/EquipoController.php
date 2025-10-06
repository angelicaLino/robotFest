<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\User;
use App\Models\IntegranteEquipo;
use App\Models\Competencia;
use App\Models\Evento;
use App\Models\Categoria;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the equipos.
     */
    public function index()
    {
        $equipos = Equipo::with('competencia')->get();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new equipo.
     */
    public function create()
    {
        $eventos = Evento::with('categorias.competencias')->where('estado', 'activo')->get();
        $usuarios = User::estudiantes()->where('estado', 'activo')->get();
        return view('equipos.create', compact('eventos', 'usuarios'));
    }


    /**
     * Store a newly created equipo in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'competencia_id' => 'required|exists:competencias,id',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:activo,inactivo',
            'users' => 'nullable|array',
            'users.*' => 'exists:users,id'
        ]);

        // Crear equipo
        $equipo = Equipo::create([
            'nombre' => $request->nombre,
            'competencia_id' => $request->competencia_id,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
        ]);

        // Asignar usuarios como integrantes
        if ($request->has('users')) {
            foreach ($request->users as $userId) {
                IntegranteEquipo::create([
                    'equipo_id' => $equipo->id,
                    'user_id' => $userId,
                    //'rol' => 'integrante', // 👈 puedes setear un valor por defecto o permitir elegirlo en el form
                ]);
            }
        }

        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Display the specified equipo.
     */
    public function show(Equipo $equipo)
    {
        $equipo->load('competencia', 'integrantes.usuario');
        return view('equipos.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified equipo.
     */
    public function edit(Equipo $equipo)
    {
        $competencias = Competencia::where('estado', 'activo')->get();
        return view('equipos.edit', compact('equipo', 'competencias'));
    }

    /**
     * Update the specified equipo in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'competencia_id' => 'required|exists:competencias,id',
            'descripcion' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Remove the specified equipo from storage.
     */
    public function destroy(Equipo $equipo)
    {
        // Para no eliminar físicamente
        $equipo->update([
            'estado' => 'eliminado',
            'eliminado' => true,
        ]);

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
