<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscar el rol "Admin"
        $adminRole = Role::where('name', 'Admin')->first();

        // Crear usuario administrador
        User::create([
            'name' => 'Admin Principal',
            'email' => 'admin@robotfest.com',
            'password' => bcrypt('12345678'),
            'role_id' => $adminRole->id,
        ]);
    }
}
