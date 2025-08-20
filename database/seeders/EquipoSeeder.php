<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipo;
use App\Models\IntegranteEquipo;
use App\Models\Competencia;
use App\Models\User;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtenemos la competencia para asignar a los equipos
        $competencia = Competencia::first(); // Puedes cambiar si quieres asignar otra competencia

        // Obtenemos los estudiantes (excluimos admin y jurado)
        $estudiantes = User::whereHas('rol', function($q){
            $q->where('nombre', 'Estudiante');
        })->get();

        // Equipo 1
        $equipo1 = Equipo::create([
            'nombre' => 'Equipo Alfa',
            'competencia_id' => $competencia->id,
            'descripcion' => '',
            'estado' => 'activo'
        ]);

        // Asignamos 3 primeros estudiantes al Equipo 1
        foreach ($estudiantes->slice(0, 3) as $user) {
            IntegranteEquipo::create([
                'equipo_id' => $equipo1->id,
                'user_id' => $user->id,
                'rol' => 'integrante'
            ]);
        }

        // Equipo 2
        $equipo2 = Equipo::create([
            'nombre' => 'Equipo Beta',
            'competencia_id' => $competencia->id,
            'descripcion' => '',
            'estado' => 'activo'
        ]);

        // Asignamos los 3 siguientes estudiantes al Equipo 2
        foreach ($estudiantes->slice(3, 3) as $user) {
            IntegranteEquipo::create([
                'equipo_id' => $equipo2->id,
                'user_id' => $user->id,
                'rol' => 'integrante'
            ]);
        }
    }
}
