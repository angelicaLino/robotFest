<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLResultadosCompetencia extends Model
{
    use HasFactory;

    protected $table = 'sl_resultados_competencia';

    protected $fillable = [
        'competencia_id',
        'equipo_id',
        'posicion',
        'distancia_max',
        'tiempo_min',
        'intentos'
    ];

    /**
     * Relación con Equipo
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    /**
     * Relación con Competencia
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}
