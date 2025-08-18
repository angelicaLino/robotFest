<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Mostrar todos los roles
    public function index()
    {
        $roles = Role::all();
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
            'name' => 'required|unique:roles,name|max:255',
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }

    // Mostrar formulario para editar un rol
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    // Actualizar un rol
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id.'|max:255',
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    // Eliminar un rol
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}
