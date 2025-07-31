<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['nombre' => 'Docente', 'descripcion' => 'Rol para los docentes', 'estado' => 'Activo', 'eliminado' => false],
            ['nombre' => 'Administrador', 'descripcion' => 'Rol para administradores del sistema', 'estado' => 'Activo', 'eliminado' => false],
            ['nombre' => 'Estudiante', 'descripcion' => 'Rol para estudiantes', 'estado' => 'Activo', 'eliminado' => false],
        ];

        foreach ($roles as $rol) {
            Rol::updateOrCreate(
                ['nombre' => $rol['nombre']],
                $rol
            );
        }
    }
}
