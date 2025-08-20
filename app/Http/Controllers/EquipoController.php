<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'institucion' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('nombre', 'institucion');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Equipo::create($data);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado con éxito.');
    }

    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'institucion' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only('nombre', 'institucion');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $equipo->update($data);

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado.');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado.');
    }
}
