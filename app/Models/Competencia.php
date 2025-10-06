<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $table = 'competencias';
    
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'estado', 
        'eliminado', 
        'evento_id', 
        'categoria_id'
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function parametros()
    {
        return $this->hasMany(ParametroCompetencia::class);
    }
}
