<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Obtener los roles existentes
        $rolDocente = Rol::where('nombre', 'Docente')->first();
        $rolAdmin = Rol::where('nombre', 'Administrador')->first();
        $rolEstudiante = Rol::where('nombre', 'Estudiante')->first();

        // Crear usuarios con diferentes roles
        User::updateOrCreate(
            ['email' => 'docente@example.com'],
            [
                'nombre' => 'Juan Docente',
                'apellido' => '',
                'password' => Hash::make('password123'),
                'estado' => 'Activo',
                'eliminado' => false,
                'rol_id' => $rolDocente ? $rolDocente->id : null,
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'nombre' => 'Ana Administradora',
                'apellido' => '',
                'password' => Hash::make('password123'),
                'estado' => 'Activo',
                'eliminado' => false,
                'rol_id' => $rolAdmin ? $rolAdmin->id : null,
            ]
        );

        User::updateOrCreate(
            ['email' => 'estudiante@example.com'],
            [
                'nombre' => 'Pedro Estudiante',
                'apellido' => '',
                'password' => Hash::make('password123'),
                'estado' => 'Activo',
                'eliminado' => false,
                'rol_id' => $rolEstudiante ? $rolEstudiante->id : null,
            ]
        );
    }
}
