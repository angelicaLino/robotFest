<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegranteEquipo extends Model
{
    use HasFactory;

    protected $table = 'integrantes_equipo'; // nombre exacto de la tabla
    protected $fillable = ['idusuario', 'idequipo'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'idequipo');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idusuario');
    }
}
