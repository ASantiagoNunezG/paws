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
        Schema::create('empleado', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dni')->unique();
            $table->string('direccion');
            $table->string('celular');
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->unsignedBigInteger('id_especialidad');
            $table->foreign('id_especialidad')->references('id_especialidad')->on('especialidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
