@extends('layouts.app')

@section('content')
    <!-- SECCIÓN DE CARRUSEL -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="import/img/principal.jpg" alt="Image" preload="auto" loading="lazy">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">En Perú hay más de 6 MILLONES de mascotas sin hogar</h1>
                        </div>
                    </div>
                </div>
                <!-- Puedes agregar más elementos al carrusel según sea necesario -->
            </div>
        </div>
    </div>
    <!-- SECCIÓN DE CARRUSEL -->

    <!-- SECCIÓN DE OBJETIVOS -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0"><span class="text-primary">Nuestro</span> Objetivo</h1>
            </div>
            <div class="row pb-3">
                <!-- Contenido de la sección de objetivos -->
            </div>
        </div>
    </div>
    <!-- SECCIÓN DE OBJETIVOS -->

    <!-- SECCIÓN DE TESTIMONIOS -->
    <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0">Empresas<span class="text-primary"> Aliadas</span></h1>
            </div>
            <div class="d-flex flex-row">
                <!-- Contenido de la sección de testimonios -->
            </div>
        </div>
    </div>
    <!-- SECCIÓN DE TESTIMONIOS -->
@endsection
