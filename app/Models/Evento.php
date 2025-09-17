<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'ubicacion',   // Asegúrate de que coincida con el nombre en la tabla
        'estado'
    ];

    // Conversión automática de fecha a objeto Carbon
    protected $casts = [
        'fecha' => 'date',
    ];

    // Relación muchos a muchos con categorías
    public function categorias()
    {
        return $this->belongsToMany(
            Categoria::class,   // Modelo relacionado
            'evento_categoria', // Nombre de la tabla pivote
            'evento_id',        // FK hacia esta tabla
            'categoria_id'      // FK hacia la tabla relacionada
        );
    }
}
