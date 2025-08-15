<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::with('rol')->get();
    return view('usuarios.index', compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {
        $roles = Rol::all(); // Trae todos los roles de la base de datos
        return view('usuarios.create', compact('roles')); // Envía la variable $roles a la vista create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'celular' => 'nullable|string|max:20',
        'estado' => 'required|string',
        'rol_id' => 'nullable|exists:roles,id',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Subir la foto si existe
    if ($request->hasFile('foto')) {
        $validated['foto'] = $request->file('foto')->store('fotos', 'public');
    }

    // Guardar usuario
    User::create([
        'name' => $validated['name'],
        'apellido' => $validated['apellido'],
        'email' => $validated['email'],
        'celular' => $validated['celular'] ?? null,
        'estado' => $validated['estado'],
        'rol_id' => $validated['rol_id'],
        'foto' => $validated['foto'] ?? null,
        'password' => bcrypt($validated['password']),
    ]);

    return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
}


    /**
     * 
     * 
     * 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
