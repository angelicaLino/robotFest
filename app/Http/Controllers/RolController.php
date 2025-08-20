<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    // Mostrar todos los roles
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    // Mostrar formulario para crear un nuevo rol
    public function create()
    {
        return view('roles.create');
    }

    // Guardar un nuevo rol
    public function store(Request $request)
    {
         $request->validate([
            'nombre' => 'required|string|max:255|unique:roles',
            'descripcion' => 'nullable|string',
        ]);

        Rol::create($request->only('nombre', 'descripcion'));

        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }

    // Mostrar formulario ver registro
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.show', compact('rol'));
    }

    // Mostrar formulario para editar un rol
    public function edit(Rol $rol)
    {
        return view('roles.edit', compact('rol'));
    }

    // Actualizar un rol
    public function update(Request $request, Rol $rol)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:roles,nombre,' . $rol->id,
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $rol->update($request->only('nombre', 'descripcion', 'estado'));


        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    //Proceso Eliminacion Logica
    public function destroy(Rol $rol)
    {
        if ($rol->id === 1 || $rol->id === 2 || $rol->id === 3) {
            return redirect()->route('roles.index')->with('error', 'No se puede eliminar roles Administrador, Estudiante y Jurado.');
        }

        // Eliminar lógicamente
        $rol->eliminado = true;
        $rol->save();

        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }

    //Proceso Restaurar
    public function restore($id)
    {
        $rol = Rol::findOrFail($id);

        if (!$rol->eliminado) {
            return redirect()->route('roles.index')->with('info', 'El rol ya está activo.');
        }

        $rol->eliminado = false;
        $rol->save();

        return redirect()->route('roles.index')->with('success', 'Rol restaurado correctamente.');
    }

    //Proceso Eliminacion Permanente o Fisica
    public function delete($id)
    {
        $rol = Rol::find($id);

        if ($rol->id === 1 || $rol->id === 2) {
            return redirect()->route('roles.index')->with('error', 'No se puede eliminar roles Administrador y Responsable.');
        }

        // Eliminar permanentemente
        $rol->delete();

        return redirect()->route('roles.index')->with('success', 'Rol eliminado permanentemente.');
    }
}
