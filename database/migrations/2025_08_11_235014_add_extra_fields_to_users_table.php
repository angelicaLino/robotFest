<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Agregar columnas si no existen
            if (! Schema::hasColumn('users', 'nombre')) {
                $table->string('nombre')->nullable()->after('id');
            }
            if (! Schema::hasColumn('users', 'apellido')) {
                $table->string('apellido')->nullable()->after('nombre');
            }
            if (! Schema::hasColumn('users', 'celular')) {
                $table->string('celular')->nullable()->after('email');
            }
            if (! Schema::hasColumn('users', 'estado')) {
                $table->string('estado')->default('activo')->after('celular');
            }
            if (! Schema::hasColumn('users', 'foto')) {
                $table->string('foto')->nullable()->after('estado');
            }
            if (! Schema::hasColumn('users', 'eliminado')) {
                $table->boolean('eliminado')->default(false)->after('foto');
            }
            if (! Schema::hasColumn('users', 'rol_id')) {
                $table->unsignedBigInteger('rol_id')->nullable()->after('foto');
                // Si la tabla roles ya existe, crea FK; si no, la migración sigue sin la FK
                if (Schema::hasTable('roles')) {
                    $table->foreign('rol_id')->references('id')->on('roles')->onDelete('set null');
                }
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // eliminar foreign key si existe
            if (Schema::hasColumn('users', 'rol_id')) {
                // intentar eliminar FK (si existe)
                try {
                    $table->dropForeign(['rol_id']);
                } catch (\Throwable $e) {
                    // ignorar si no existe FK
                }
                $table->dropColumn('rol_id');
            }

            if (Schema::hasColumn('users', 'eliminado')) {
                $table->dropColumn('eliminado');
            }
            if (Schema::hasColumn('users', 'foto')) {
                $table->dropColumn('foto');
            }
            if (Schema::hasColumn('users', 'estado')) {
                $table->dropColumn('estado');
            }
            if (Schema::hasColumn('users', 'celular')) {
                $table->dropColumn('celular');
            }
            if (Schema::hasColumn('users', 'apellido')) {
                $table->dropColumn('apellido');
            }
            if (Schema::hasColumn('users', 'nombre')) {
                $table->dropColumn('nombre');
            }
        });
    }
};
