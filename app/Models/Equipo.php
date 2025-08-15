<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function integrantes()
    {
        return $this->hasMany(IntegranteEquipo::class, 'idequipo');
    }

    public function usuarios()
    {
        // Para acceder directamente a los usuarios del equipo
        return $this->hasManyThrough(User::class, IntegranteEquipo::class, 'idequipo', 'id', 'id', 'idusuario');
    }
}
