<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{

    public function index()
    {
        $competencias = Competencia::with(['evento', 'categoria'])->get();
        return view('competencias.index', compact('competencias'));
    }

    public function create()
    {
        $eventos = Evento::all();
        $categorias = Categoria::all();

        return view('competencias.create', compact('eventos', 'categorias'));
    }


    public function store(Request $request)
    {
        // Validación competencia
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'evento_id' => 'required|exists:eventos,id',
            'categoria_id' => 'required|exists:categorias,id',
            'estado' => 'required|in:activo,inactivo',
            // Validación parámetros
            'parametros.*.nombre' => 'required|string',
            'parametros.*.valor' => 'required|numeric',
        ]);

        // Crear competencia
        $competencia = Competencia::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'evento_id' => $request->evento_id,
            'categoria_id' => $request->categoria_id,
            'estado' => $request->estado,
        ]);

        // Crear parámetros asociados
        if($request->has('parametros')){
            foreach ($request->parametros as $param){
                $competencia->parametros()->create([
                    'nombre' => $param['nombre'],
                    'valor' => $param['valor'],
                ]);
            }
        }

        return redirect()->route('competencias.index')
                        ->with('success', 'Competencia registrada correctamente con sus parámetros');
    }

    /**
     * Display the specified resource.
     */
    public function show(Competencia $competencia)
    {
        return view('competencias.show', compact('competencia'));
    }

    public function edit(Competencia $competencia)
{
    $eventos = Evento::all();
    $categorias = Categoria::all();

    // Obtener el parámetro "Nro de intentos" si existe
    $parametroIntentos = $competencia->parametros()->where('nombre', 'Nro de intentos')->first();

    return view('competencias.edit', compact('competencia', 'eventos', 'categorias', 'parametroIntentos'));
}

public function update(Request $request, Competencia $competencia)
{
    // Validación competencia
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'evento_id' => 'required|exists:eventos,id',
        'categoria_id' => 'required|exists:categorias,id',
        'estado' => 'required|in:activo,inactivo',
        // Si viene el parámetro intentos
        'parametros.0.valor' => 'nullable|numeric|min:1',
    ]);

    // Actualizar competencia
    $competencia->update([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'evento_id' => $request->evento_id,
        'categoria_id' => $request->categoria_id,
        'estado' => $request->estado,
    ]);

    // Actualizar o crear parámetro "Nro de intentos" solo si existe en el request
    if ($request->has('parametros.0.valor') && $request->parametros[0]['valor'] !== null) {
        $parametro = $competencia->parametros()->updateOrCreate(
            ['nombre' => 'Nro de intentos'],
            ['valor' => $request->parametros[0]['valor']]
        );
    } else {
        // Si la categoría ya no es Seguidor de Línea, eliminar el parámetro
        $competencia->parametros()->where('nombre', 'Nro de intentos')->delete();
    }

    return redirect()->route('competencias.index')
                     ->with('success', 'Competencia actualizada correctamente');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competencia $competencia)
    {
        $competencia->delete();
        return redirect()->route('competencias.index')->with('success', 'Competencia eliminada correctamente.');
    }
}
