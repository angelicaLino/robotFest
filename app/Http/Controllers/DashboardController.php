<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use App\Models\Evento;
use App\Models\Competencia;
use App\Models\Equipo;
use App\Models\Categoria; // 🔹 Importamos categorías

class DashboardController extends Controller
{
    public function index()
    {
        // 🔹 Eventos activos
        $eventosActivos = Evento::where('estado', 'activo')->count();

        // 🔹 Total de competencias
        $competencias = Competencia::count();

        // 🔹 Total de equipos inscritos
        $equipos = Equipo::count();

        // 🔹 Total de participantes (usuarios con rol "participante")
        $participantes = User::whereHas('rol', function($query){
            $query->where('name', 'participante');
        })->count();

        // 🔹 Número de categorías por evento
        $categoriasPorEvento = Evento::withCount('categorias') // asume relación Evento->categorias()
            ->get(['id', 'nombre', 'categorias_count']);

        // Pasar los datos a la vista
        return view('dashboard', compact(
            'eventosActivos',
            'competencias',
            'equipos',
            'participantes',
            'categoriasPorEvento' // 👈 añadimos esto
        ));
    }
}
