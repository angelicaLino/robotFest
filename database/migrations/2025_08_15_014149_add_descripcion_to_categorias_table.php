<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('categorias', function (Blueprint $table) {
        $table->string('descripcion')->nullable()->after('nombre');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('categorias', function (Blueprint $table) {
        $table->dropColumn('descripcion');
    });
}

};
