@extends('layouts.master')

@section('title', 'Editar Mascota')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editando Mascota</h1>

        <h3>Información acerca de  {{ $mascota->nombre }}</h3>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
        <hr>
        <form action="{{ route('mascota.update', $mascota->id_mascota) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ $mascota->nombre }}">
            </div>

            <div class="mb-3">
                <label for="tamano" class="form-label">Tamaño:</label>
                <input type="text" name="tamano" id="tamano" class="form-control" required value="{{ $mascota->tamano }}">
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required value="{{ $mascota->edad }}">
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select name="sexo" id="sexo" class="form-select" required>
                    <option value="Macho" {{ $mascota->sexo === 'Macho' ? 'selected' : '' }}>Macho</option>
                    <option value="Hembra" {{ $mascota->sexo === 'Hembra' ? 'selected' : '' }}>Hembra</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" name="tipo" id="tipo" class="form-control" required value="{{ $mascota->tipo }}">
            </div>

            <div class="mb-3">
                <label for="id_usuario" class="form-label">Usuario</label>
                <input type="text" name="id_usuario" id="id_usuario" class="form-control" required value="{{ $mascota->id_usuario }}">
            </div>

            <div class="form-group">
                <label for="id_estado_mas" class="form-label">Estado de la mascota:</label>
                <select name="id_estado_mas" id="id_estado_mas" class="form-control" required>
                    <!-- Itera sobre los estados de mascotas para llenar el dropdown -->
                    @foreach($estado as $estado)
                        <option value="{{ $estado->id_estado_mas }}" 
                            @if ($estado->id_estado_mas == $mascota->id_estado_mas) {{ 'selected' }} @endif>
                            {{ $estado->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>            
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
