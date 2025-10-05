<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'rol_id',
        'imagen',
        'estado',
        'eliminado'
    ];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Scopes
    public function scopeEstudiantes($query)
    {
        return $query->whereHas('rol', function ($q) {
            $q->where('nombre', 'Estudiante');
        });
    }

    // 👇 Relación con Role
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'integrantes_equipos', 'user_id', 'equipo_id')
                    ->withPivot('rol')
                    ->withTimestamps();
    }
    
}

