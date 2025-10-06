<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Competencia;
use App\Models\SLRobotIntento;     
use App\Models\SLResultadosCompetencia; 

class SLController extends Controller
{
    /**
     * Mostrar lista de equipos y sus intentos.
     */
    public function index(Request $request)
{
    // Todas las competencias de Seguidor de Línea
    $competencias = Competencia::where('categoria_id', 1)
                                ->whereIn('estado', ['activo', 'finalizado'])
                                ->get();

    // Selección de competencia
    $competencia_id = $request->input('competencia_id');

    $competencia = null;
        if ($competencia_id) {
            $competencia = Competencia::find($competencia_id);
        }

    if ($competencia_id) {
        // Traer intentos asociados a esa competencia
        $intentos = SLRobotIntento::whereHas('equipo', function ($q) use ($competencia_id) {
            $q->where('competencia_id', $competencia_id);
        })->with('equipo')->get();
    } else {
        // Por defecto todos los intentos de todas las competencias SL
        $intentos = SLRobotIntento::whereHas('equipo', function ($q) use ($competencias) {
            $q->whereIn('competencia_id', $competencias->pluck('id'));
        })->with('equipo')->get();
    }

    $resultados = collect();
    if ($competencia_id) {
        $competencia = Competencia::find($competencia_id);
        if ($competencia) {
            $resultados = SLResultadosCompetencia::where('competencia_id', $competencia->id)
                            ->orderBy('posicion')
                            ->take(3)
                            ->with('equipo')
                            ->get();
        }
    }

    return view('competencias.sl.index', compact('competencias', 'intentos', 'competencia_id','competencia', 'resultados'));
}


    /**
     * Mostrar formulario para registrar un intento de un equipo.
     */
    public function create(Request $request)
    {
        // Traer todas las competencias de "Seguidor de Línea" activas
        $competencias = Competencia::where('categoria_id', 1)
                                    ->where('estado', 'activo')
                                    ->get();

        // Si viene una competencia seleccionada (por request)
        $competencia_id = $request->input('competencia_id');

        // Traer equipos de la competencia seleccionada
        $equipos = $competencia_id 
            ? Equipo::where('competencia_id', $competencia_id)->get() 
            : collect();

        // Obtener todos los intentos existentes para los equipos de esa competencia
        $intentos = $competencia_id 
            ? SLRobotIntento::whereHas('equipo', function ($q) use ($competencia_id) {
                $q->where('competencia_id', $competencia_id);
            })->get(['equipo_id', 'intento_num'])
            : collect();

        // Traer el parámetro (por ejemplo: intentos = 3)
        $competencia_param = $competencia_id 
            ? Competencia::find($competencia_id)?->parametro 
            : null;

        return view('competencias.sl.create', compact('competencias', 'equipos', 'competencia_id','intentos', 'competencia_param'));
    }


    /**
     * Guardar un intento.
     */
    public function store(Request $request)
    {
        $request->validate([
            'competencia_id' => 'required|exists:competencias,id',
            'equipo_id' => 'required|exists:equipos,id',
            'intento_num' => 'required|integer|min:1',
            'distancia' => 'required|numeric|min:0',
            'tiempo' => 'required|numeric|min:0',
            'errores' => 'nullable|string',
            'observaciones' => 'nullable|string',
        ]);

        SLRobotIntento::create($request->all());

        return redirect()->route('sl.index', ['competencia_id' => $request->competencia_id])
                        ->with('success', 'Intento registrado correctamente.');
    }


    /**
     * Mostrar detalles de un intento.
     */
    public function show(SLRobotIntento $sl)
    {
        return view('competencias.sl.show', compact('sl'));
    }

    /**
     * Mostrar formulario para editar un intento.
     */
    public function edit(SLRobotIntento $sl)
    {
        return view('competencias.sl.edit', compact('sl'));
    }

    /**
     * Actualizar intento.
     */
    public function update(Request $request, SLRobotIntento $sl)
    {
        $request->validate([
            'distancia'   => 'required|numeric|min:0',
            'tiempo'      => 'required|numeric|min:0',
            'errores'     => 'nullable|integer|min:0',
            'observaciones' => 'nullable|string'
        ]);

        $sl->update($request->only('distancia', 'tiempo', 'errores', 'observaciones'));

        return redirect()->route('sl.index')->with('success', 'Intento actualizado correctamente.');
    }

    /**
     * Eliminar un intento.
     */
    public function destroy(SLRobotIntento $sl)
    {
        $sl->delete();
        return redirect()->route('sl.index')->with('success', 'Intento eliminado correctamente.');
    }

    /**
     * Cerrar una competencia y calcular resultados.
     */
    public function cerrarCompetencia(Competencia $competencia)
    {
        // Verificar que sea una competencia de Seguidor de Línea y esté activa
        if ($competencia->estado != 'activo' || !str_contains($competencia->nombre, 'Seguidor de Línea')) {
            return redirect()->route('sl.index')->with('error', 'La competencia no puede cerrarse.');
        }

        $equipos = Equipo::where('competencia_id', $competencia->id)
                    ->with('intentosSL')
                    ->get();

        foreach ($equipos as $equipo) {
            $mejor = $equipo->intentosSL
                ->where('estado', 'activo')
                ->sortByDesc('distancia')
                ->sortBy('tiempo')
                ->first();

            if ($mejor) {
                SLResultadosCompetencia::create([
                    'competencia_id' => $competencia->id,
                    'equipo_id'      => $equipo->id,
                    'posicion'       => 0, // se asigna después
                    'distancia_max'  => $mejor->distancia,
                    'tiempo_min'     => $mejor->tiempo,
                    'intentos'       => $equipo->intentosSL->count()
                ]);
            }
        }

        // Calcular posiciones finales
        $resultados = SLResultadosCompetencia::where('competencia_id', $competencia->id)
                        ->orderByDesc('distancia_max')
                        ->orderBy('tiempo_min')
                        ->get();

        $pos = 1;
        foreach ($resultados as $r) {
            $r->posicion = $pos++;
            $r->save();
        }

        // Cambiar estado de competencia
        $competencia->estado = 'finalizado';
        $competencia->save();

        return redirect()->route('sl.index')->with('success', 'Competencia cerrada y resultados registrados.');
    }

}
