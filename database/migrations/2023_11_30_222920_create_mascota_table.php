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
        //
        
        Schema::create('mascota', function (Blueprint $table) {
            $table->id('id_mascota');
            $table->string('nombre');
            $table->string('tamano');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('tipo');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_estado_mas');           
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_estado_mas')->references('id_estado_mas')->on('estado_mascota'); 
            $table->timestamps();
            
            //
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
