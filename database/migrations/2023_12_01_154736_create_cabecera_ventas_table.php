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
        Schema::create('cabecera_ventas', function (Blueprint $table) {
            $table->id('id_cabecera');
            $table->date('fecha_venta');
            $table->double('total');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_tipo_boleta');
            $table->date('fecha_recojo');
            $table->string('ruc');
            $table->string('razon');
            $table->string('pago');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_tipo_boleta')->references('id_tipo_boleta')->on('tipo_boleta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecera_ventas');
    }
};
