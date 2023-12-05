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
        Schema::create('adopciones', function (Blueprint $table) {
            $table->id('his_adop');
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_mascota');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleado');
            $table->foreign('id_mascota')->references('id_mascota')->on('mascota');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopciones');
    }
};
