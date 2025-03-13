@extends('app')

@section('titulo','Editar categoria')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Editar Categoría</h2>

    <form action="{{ route('update.categoria', $categoria_editar->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Nombre de la categoría -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la categoría:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $categoria_editar->nombre }}" required>
        </div>

        <!-- Botón de edición -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Editar Categoría</button>
        </div>
    </form>
</div>
@endsection