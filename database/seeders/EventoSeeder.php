<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'nombre' => 'RobotFest',
            'descripcion' => 'Evento principal de robótica con múltiples competencias.',
            'fecha' => '2025-10-01', // Ajusta la fecha según necesites
            'estado' => 'activo',
            'eliminado' => false,
        ]);
    }
}
