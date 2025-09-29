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
    Schema::create('inscripcions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('nombre_equipo');
        $table->text('participantes');
        $table->date('fecha_inscripcion');
        $table->string('foto_robot')->nullable();
        $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
        $table->foreignId('competencia_id')->constrained()->onDelete('cascade');
        $table->string('estado')->default('pendiente'); // pendiente, aprobado, rechazado
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
