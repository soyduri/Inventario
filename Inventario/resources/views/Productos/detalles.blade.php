@extends('app')

@section('titulo','Detalles del Producto')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Detalles del Producto</h2>

    <!-- Detalles del producto -->
    <div class="card">
        <div class="card-header">
            <h5>{{ $producto->nombre }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
            <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
            <p><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>
            <p><strong>Proveedor:</strong> {{ $producto->proveedore->nombre }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('editar.producto', $producto->id) }}" class="btn btn-warning btn-sm">Editar Producto</a>
            <a href="{{ route('eliminar.producto', $producto->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar Producto</a>
        </div>
    </div>

    <!-- Botón de regresar a la lista -->
    <div class="text-end mt-4">
        <a href="{{ route('index.productos') }}" class="btn btn-secondary">Volver a la lista de productos</a>
    </div>
</div>
@endsection