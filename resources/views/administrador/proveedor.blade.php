@extends('layouts.master')
@section('title', 'Proveedores')

@section('contenido')
    <h1>Ingresaste a la vista de proveedores</h1>

    <table border="1 px solid black">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>RUC</th>
                <th>Teléfono</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedor as $prove)
                <tr>
                    <td>{{ $prove->id_proveedor }}</td>
                    <td>{{ $prove->nombre }}</td>
                    <td>{{ $prove->ruc }}</td>
                    <td>{{ $prove->telefono }}</td>
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
