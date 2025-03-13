@extends('app')

@section('titulo','Productos')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Crear Producto</h2>

    <form action="{{ route('store.producto') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <!-- Nombre del producto -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" required>
        </div>

        <!-- Precio -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" name="precio" class="form-control" id="precio" required>
        </div>

        <!-- Cantidad -->
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="text" name="cantidad" class="form-control" id="cantidad" required>
        </div>

        <!-- Proveedor -->
        <div class="mb-3">
            <label for="proveedor" class="form-label">Proveedor:</label>
            <select name="proveedor" id="proveedor" class="form-select" required>
                @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Categoría -->
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría:</label>
            <select name="categoria" id="categoria" class="form-select" required>
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Botón de registro -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </div>
    </form>
</div>
@endsection