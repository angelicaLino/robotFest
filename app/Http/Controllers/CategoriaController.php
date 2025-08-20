<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Mostrar todas las categorías.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Mostrar el formulario para crear una categoría.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Guardar una nueva categoría.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría creada correctamente.');
    }

    /**
     * Mostrar una categoría específica.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Mostrar el formulario para editar una categoría.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Actualizar una categoría.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría actualizada correctamente.');
    }


    //Proceso Eliminacion Logica
    public function destroy(Categoria $categoria)
    {
        if ($categoria->id === 1 || $categoria->id === 2 || $categoria->id === 3) {
            return redirect()->route('categorias.index')->with('error', 'No se puede eliminar categorias Seguidor de Línea, Zumo y Velocista.');
        }

        // Eliminar lógicamente
        $categoria->eliminado = true;
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria eliminado correctamente.');
    }

    //Proceso Restaurar
    public function restore($id)
    {
        $categoria = Categoria::findOrFail($id);

        if (!$categoria->eliminado) {
            return redirect()->route('categorias.index')->with('info', 'El categoria ya está activo.');
        }

        $categoria->eliminado = false;
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria restaurado correctamente.');
    }

    //Proceso Eliminacion Permanente o Fisica
    public function delete($id)
    {
        $categoria = Categoria::find($id);

        if ($categoria->id === 1 || $categoria->id === 2 || $categoria->id === 3) {
            return redirect()->route('categorias.index')->with('error', 'No se puede eliminar categorias Seguidor de Línea, Zumo y Velocista.');
        }

        // Eliminar permanentemente
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria eliminado permanentemente.');
    }
}
