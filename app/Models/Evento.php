<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'fecha', 'ubicacion', 'estado'
    ];

    public function categorias() {
        return $this->belongsToMany(Categoria::class, 'evento_categoria', 'evento_id', 'categoria_id');
    }
}
