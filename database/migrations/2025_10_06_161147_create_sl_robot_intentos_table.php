<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sl_robot_intentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade');
            $table->integer('intento_num');
            $table->float('distancia')->nullable();
            $table->float('tiempo')->nullable();
            $table->integer('errores')->default(0);
            $table->text('observaciones')->nullable();
            $table->enum('estado', ['activo', 'cancelado'])->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sl_robot_intentos');
    }
};
