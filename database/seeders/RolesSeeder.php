<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        Rol::insert([
            [
                'nombre' => 'Administrador',
                'descripcion' => 'El administrador es quien controla todo el sistema, así que tiene acceso total.',
                'estado' => 'activo',
                'eliminado' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Estudiante',
                'descripcion' => 'Los estudiantes son principalmente participantes.',
                'estado' => 'activo',
                'eliminado' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Jurado',
                'descripcion' => 'El jurado se encarga de evaluar y calificar.',
                'estado' => 'activo',
                'eliminado' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
