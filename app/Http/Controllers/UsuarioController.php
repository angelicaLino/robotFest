<?php

namespace App\Http\Controllers;

use App\Models\User; // Importamos el modelo User
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Mostrar la lista de usuarios
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Mostrar el formulario de creación
     */
    public function create()
    {
        $roles = Rol::all(); // Trae todos los roles
        return view('usuarios.create', compact('roles')); // Pasa los roles a la vista
    }
    /**
     * Guardar un nuevo usuario
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }


    /**
     * Mostrar un usuario específico
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Mostrar el formulario de edición
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Actualizar un usuario
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $usuario->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $usuario->password,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Eliminar un usuario
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
