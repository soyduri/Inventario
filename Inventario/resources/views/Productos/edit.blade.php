@extends('app')

@section('titulo','Productos')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Editar Producto</h2>

    <form action="{{ route('update.producto', $producto_editar->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Nombre del producto -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto_editar->nombre }}" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" value="{{ $producto_editar->descripcion }}" required>
        </div>

        <!-- Precio -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" name="precio" class="form-control" value="{{ $producto_editar->precio }}" required>
        </div>

        <!-- Cantidad -->
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="text" name="cantidad" class="form-control" value="{{ $producto_editar->cantidad }}" required>
        </div>

        <!-- Proveedor -->
        <div class="mb-3">
            <label for="proveedor" class="form-label">Proveedor:</label>
            <select name="proveedor" class="form-select" required>
                @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}"
                    @if($producto_editar->proveedor_id == $proveedor->id) selected @endif>
                    {{ $proveedor->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Categoría -->
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría:</label>
            <select name="categoria" class="form-select" required>
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}"
                    @if($producto_editar->categoria_id == $categoria->id) selected @endif>
                    {{ $categoria->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Botón de edición -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Editar Producto</button>
        </div>
    </form>
</div>
@endsection