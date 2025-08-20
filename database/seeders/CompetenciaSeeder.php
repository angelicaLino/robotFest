<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencia;
use App\Models\Evento;
use App\Models\Categoria;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener el evento RobotFest
        $evento = Evento::where('nombre', 'RobotFest')->first();

        // Obtener las categorías
        $seguidor = Categoria::where('nombre', 'Seguidor de Linea')->first();
        $zumo = Categoria::where('nombre', 'Zumo')->first();
        $velocista = Categoria::where('nombre', 'Velocista')->first();

        // Crear competencias
        Competencia::create([
            'nombre' => 'Competencia de Seguidor de Línea',
            'descripcion' => 'Competencia oficial de robots seguidores de línea.',
            'evento_id' => $evento->id,
            'categoria_id' => $seguidor->id,
            'estado' => 'activo',
            'eliminado' => false,
        ]);

        Competencia::create([
            'nombre' => 'Competencia de Zumo',
            'descripcion' => 'Competencia oficial de robots luchadores de sumo.',
            'evento_id' => $evento->id,
            'categoria_id' => $zumo->id,
            'estado' => 'activo',
            'eliminado' => false,
        ]);

        Competencia::create([
            'nombre' => 'Competencia de Velocistas',
            'descripcion' => 'Competencia oficial de robots velocistas.',
            'evento_id' => $evento->id,
            'categoria_id' => $velocista->id,
            'estado' => 'activo',
            'eliminado' => false,
        ]);
    }
}
