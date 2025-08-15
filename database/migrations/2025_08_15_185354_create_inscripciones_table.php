<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('estado'); // Ej: "pendiente", "aprobada", "rechazada"
            $table->date('fecha');
            
            $table->unsignedBigInteger('equipo_id');
            $table->unsignedBigInteger('evento_id')->nullable(); // Aún no creaste eventos, por eso nullable

            // Relaciones
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
