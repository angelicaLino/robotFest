<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
    'nombre',
    'apellido',
    'email',
    'password',
    'estado',
    'eliminado',
    'celular',
    'foto',
    'rol_id',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación inversa: un usuario pertenece a un rol
    public function rol()
    {
      return $this->belongsTo(Rol::class, 'rol_id');
    }


    public function equipos()
{
    return $this->belongsToMany(Equipo::class, 'integrantes_equipo', 'user_id', 'equipo_id')
                ->withPivot('rol_en_equipo')
                ->withTimestamps();
}

}


