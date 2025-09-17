<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('eventos')->insert([
            'nombre'      => 'RobotFest',
            'descripcion' => 'Competencia anual de robótica',
            'fecha'       => Carbon::parse('2025-11-10'), // 📅 Ajusta la fecha que quieras
            'ubicacion'   => 'Santa Cruz, Bolivia',
            'estado'      => 'activo',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
