<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'nombre', 
        'descripcion', 
        'fecha', 
        'estado', 
        'eliminado'
    ];

    public function competencias()
    {
        return $this->hasMany(Competencia::class);
    }
}
