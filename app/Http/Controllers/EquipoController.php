<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\User;
use App\Models\Competencia;
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
        $competencias = Competencia::where('estado', 'activo')->get();
        $usuarios = User::where('estado', 'activo')->get();
        return view('equipos.create', compact('competencias', 'usuarios'));
    }


    /**
     * Store a newly created equipo in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'competencia_id' => 'required|exists:competencias,id',
            'descripcion' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo',
            'users' => 'nullable|array',
            'users.*' => 'exists:users,id',
        ]);

        $equipo = Equipo::create($request->only(['nombre', 'competencia_id', 'descripcion', 'estado']));

        // Registrar integrantes
        if ($request->has('users')) {
            foreach ($request->users as $user_id) {
                $equipo->integrantes()->firstOrCreate(
                    ['user_id' => $user_id],
                    ['rol' => 'integrante']
                );
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
