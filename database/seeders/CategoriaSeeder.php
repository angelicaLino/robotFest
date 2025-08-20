<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Seguidor de Linea',
                'descripcion' => 'Categoría de Seguidor de Línea',
                'estado' => 'activo',
                'eliminado' => false,
            ],
            [
                'nombre' => 'Zumo',
                'descripcion' => 'Categoría de Zumo',
                'estado' => 'activo',
                'eliminado' => false,
            ],
            [
                'nombre' => 'Velocista',
                'descripcion' => 'Categoría de Velocista',
                'estado' => 'activo',
                'eliminado' => false,
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
