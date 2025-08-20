<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'competencia_id',
        'nombre',
        'descripcion',
        'estado',
        'eliminado',
    ];

    /**
     * Relación: Un equipo pertenece a una competencia
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }

    /**
     * Relación: Un equipo tiene muchos integrantes
     */
    public function integrantes()
    {
        return $this->hasMany(IntegranteEquipo::class);
    }
}
