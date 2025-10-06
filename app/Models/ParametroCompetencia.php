<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParametroCompetencia extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención)
    protected $table = 'parametros_competencia';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'competencia_id',
        'nombre',
        'valor',
    ];

    /**
     * Relación con Competencia
     * Un parámetro pertenece a una competencia
     */
    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}
