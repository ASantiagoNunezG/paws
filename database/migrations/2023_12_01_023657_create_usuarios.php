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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->string('celular');
            $table->string('num_documento');
            $table->unsignedBigInteger('id_tipo_doc');
            $table->foreign('id_tipo_doc')->references('id_tipo_doc')->on('tipo_documento');
            $table->timestamps();
            //$table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
