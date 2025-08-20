<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rol;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrador = Rol::where('nombre', 'Administrador')->first();
        $estudiante = Rol::where('nombre', 'Estudiante')->first();
        $jurado = Rol::where('nombre', 'Jurado')->first();

        User::create([
            'name' => 'administrador',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'rol_id' => $administrador->id,
            'password' => Hash::make('admin123'),
            'imagen' => null, 
            'estado' => 'activo',
            'eliminado' => false
        ]);

        User::create([
            'name' => 'estudiante',
            'last_name' => 'usuario',
            'email' => 'estudiante@example.com',
            'rol_id' => $estudiante->id,
            'password' => Hash::make('estudiante123'),
            'imagen' => null,
            'estado' => 'activo',
            'eliminado' => false
        ]);

        User::create([
            'name' => 'jurado',
            'last_name' => 'usuario',
            'email' => 'jurado@example.com',
            'rol_id' => $jurado->id,
            'password' => Hash::make('jurado123'),
            'imagen' => null,
            'estado' => 'activo',
            'eliminado' => false
        ]);


        // 6 estudiantes adicionales
        $nuevos_estudiantes = [
            ['name' => 'Leonardo', 'last_name' => 'Ayaviri', 'email' => 'estudiante1@example.com'],
            ['name' => 'Angelica', 'last_name' => 'Lino', 'email' => 'estudiante2@example.com'],
            ['name' => 'Cristian', 'last_name' => 'Sanchez', 'email' => 'estudiante3@example.com'],
            ['name' => 'Alvaro', 'last_name' => 'Cuba', 'email' => 'estudiante4@example.com'],
            ['name' => 'Juan', 'last_name' => 'Castedo', 'email' => 'estudiante5@example.com'],
            ['name' => 'Jorge', 'last_name' => 'Alvarado', 'email' => 'estudiante6@example.com'],
        ];

        foreach ($nuevos_estudiantes as $estudiante_data) {
            User::create([
                'name' => $estudiante_data['name'],
                'last_name' => $estudiante_data['last_name'],
                'email' => $estudiante_data['email'],
                'rol_id' => $estudiante->id,
                'password' => Hash::make('estudiante123'),
                'imagen' => null,
                'estado' => 'activo',
                'eliminado' => false
            ]);
        }
    }
}
