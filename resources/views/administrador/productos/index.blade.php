@extends('layouts.master')
@section('title', 'Productos')
@section('content')

<div class="container mt-4">
    <h1>CRUD Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Nueva mascota</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Proveedor</th>
                <th>Fecha de creación</th>
                <th>Fecha de modificación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->proveedor->nombre }}</td>
                    <td>{{ $producto->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $producto->updated_at->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn btn-warning me-2">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
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
