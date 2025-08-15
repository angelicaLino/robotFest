<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('integrantes_equipo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');   // FK a users
            $table->unsignedBigInteger('equipo_id'); // FK a equipos
            $table->string('rol_en_equipo')->nullable(); // Ej: capitán, jugador, suplente
            $table->timestamps();

            // Relaciones foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('integrantes_equipo');
    }
};
