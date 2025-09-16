<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
        'eliminado',
    ];

    public function competencias()
    {
        return $this->hasMany(Competencia::class);
    }
    
    public function eventos()
    {
    return $this->belongsToMany(Evento::class, 'evento_categoria', 'categoria_id', 'evento_id');
    }

}
