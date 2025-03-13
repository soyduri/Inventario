@extends('app')

@section('titulo','Proveedores')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Lista de Proveedores</h2>

    <!-- Botón para crear proveedor -->
    <div class="text-end mb-4">
        <a href="{{ route('create.proveedor') }}" class="btn btn-success">Crear Proveedor</a>
    </div>

    <!-- Tabla de proveedores -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre del proveedor</th>
                <th>Correo electrónico</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->correo_contacto }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>
                    <a href="{{ route('editar.proveedor', $proveedor->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('eliminar.proveedor', $proveedor->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este proveedor?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection