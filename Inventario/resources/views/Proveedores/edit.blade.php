@extends('app')

@section('titulo','Proveedores')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Editar Proveedor</h2>

    <form action="{{ route('update.proveedor', $proveedor_editar->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Nombre del proveedor -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del proveedor:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $proveedor_editar->nombre }}" required>
        </div>

        <!-- Correo electrónico -->
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico:</label>
            <input type="email" name="correo" class="form-control" value="{{ $proveedor_editar->correo_contacto }}" required>
        </div>

        <!-- Teléfono -->
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $proveedor_editar->telefono }}" required>
        </div>

        <!-- Botón de edición -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Editar Proveedor</button>
        </div>
    </form>
</div>
@endsection