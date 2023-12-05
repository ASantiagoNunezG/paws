@extends('layouts.master')
@section('title', 'Mascotas')
    
@section('content')
<div class="container mt-4">
    <h1>CRUD Mascotas</h1>
    <a href="{{ route('mascota.registrar') }}" class="btn btn-primary mb-3">Nueva mascota</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Tamaño</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Tipo</th>
                <th>Usuario</th>
                <th>Estado de la mascota</th>
                <th>Fecha de registro</th>
                <th>Última actualización</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascota as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->tamano }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->sexo }}</td>
                    <td>{{ $mascota->tipo }}</td>
                    <td>{{ $mascota->usuario->nombre }}</td>
                    <td>{{ $mascota->estado->nombre }}</td>
                    <td>{{ $mascota->created_at }}</td>
                    <td>{{ $mascota->updated_at }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('mascota.edit', $mascota->id_mascota) }}" class="btn btn-warning me-2">Editar</a>
                            <form action="{{ route('mascota.destroy', $mascota->id_mascota) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta mascota?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                    
                </tr>            
            @endforeach
        </tbody>
    </table>
</div>
@endsection
