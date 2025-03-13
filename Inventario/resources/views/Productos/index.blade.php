@extends('app')

@section('titulo','Productos')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Lista de Productos</h2>

    <!-- Botón para crear producto -->
    <div class="text-end mb-4">
        <a href="{{ route('create.producto') }}" class="btn btn-success">Crear Producto</a>
    </div>

    <!-- Tabla de productos -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Categoría</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }} €</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->categoria->nombre }}</td>
                <td>{{ $producto->proveedore->nombre }}</td>
                <td>
                    <!-- Botón para redirigir a la página de detalles del producto -->
                    <a href="{{ route('detalles.producto', $producto->id) }}" class="btn btn-info btn-sm">Ver Detalles</a>

                    <!-- Botones de edición y eliminación -->
                    <a href="{{ route('editar.producto', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('eliminar.producto', $producto->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection