@extends('layouts.app')

@section('content')
    <!-- SECCIÓN DE CARRUSEL -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="import/img/principal.jpg" alt="First slide" style="max-height: 600px; width: auto;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">En Perú hay más de 6 MILLONES de mascotas sin hogar</h1>
                        </div>
                    </div>
                </div>
                <!-- Segundo slide -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="import/img/principal2.jpg" alt="Second slide" style="max-height: 600px; width: auto;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Título para la segunda imagen</h1>
                        </div>
                    </div>
                </div>
                <!-- Tercer slide -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="import/img/principal3.jpg" alt="Third slide" style="max-height: 600px; width: auto;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Título para la tercera imagen</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles del carrusel -->
            <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- FIN DE SECCIÓN DE CARRUSEL -->

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

@section('scripts')
    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
