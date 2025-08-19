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
    }
}
