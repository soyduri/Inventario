@extends('app')

@section('titulo','Proveedores')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Crear Proveedor</h2>

    <form action="{{ route('store.proveedor') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <!-- Nombre del proveedor -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del proveedor:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>

        <!-- Correo electrónico -->
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico:</label>
            <input type="email" name="correo" class="form-control" id="correo" required>
        </div>

        <!-- Teléfono -->
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono" required>
        </div>

        <!-- Botón de registro -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar Proveedor</button>
        </div>
    </form>
</div>
@endsection