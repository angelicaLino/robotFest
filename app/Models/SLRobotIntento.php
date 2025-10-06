<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLRobotIntento extends Model
{
    use HasFactory;

    protected $table = 'sl_robot_intentos';

    protected $fillable = [
        'equipo_id',
        'intento_num',
        'distancia',
        'tiempo',
        'errores',
        'observaciones',
        'estado'
    ];

    /**
     * Relación con Equipo
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
