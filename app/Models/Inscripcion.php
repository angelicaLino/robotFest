<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre_equipo',
        'participantes',
        'fecha_inscripcion',
        'foto_robot',
        'categoria_id',
        'competencia_id',
        'estado',
    ];

    // Relación con usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function competencia() {
        return $this->belongsTo(Competencia::class);
    }
}
