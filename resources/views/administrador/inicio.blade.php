@extends('layouts.master')
@section('title', 'Inicio')

@section('content')
<div class="container mt-4">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="display-4">¡Bienvenido al panel de administrador!</h1>
        
        </div>
    </section>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="row">
            <div style="border: 1px solid black" class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/user.png') }}" alt="">
                    <h2>Información Personal</h2>
                    <p><strong>Nombre:</strong></p>
                    <p><strong>Email:</strong></p>
                    <p><strong>Teléfono:</strong></p>
                </div>
    
                <!-- Columna derecha - Experiencia y Educación -->
                <div class="col-md-8">
                    <h2></h2>
                    <div class="mb-4">
                        
                    </div>
    
                    <h2></h2>
                    <div class="mb-4">
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection