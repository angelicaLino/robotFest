<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegranteEquipo extends Model
{
    use HasFactory;

    protected $table = 'integrantes_equipos';

    protected $fillable = [
        'equipo_id',
        'user_id',
        'rol',
    ];

    /**
     * Relación: Un integrante pertenece a un equipo
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    /**
     * Relación: Un integrante hace referencia a un usuario registrado
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
