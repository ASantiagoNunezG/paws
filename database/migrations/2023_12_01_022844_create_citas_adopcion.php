<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citas_adopcion', function (Blueprint $table) {
            $table->id('id_cita_mascota');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_mascota');
            $table->unsignedBigInteger('id_estado_res');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_mascota')->references('id_mascota')->on('mascota');
            $table->foreign('id_estado_res')->references('id_estado_res')->on('estado_reserva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_adopcion');
    }
};
