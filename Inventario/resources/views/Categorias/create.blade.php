@extends('app')

@section('titulo','Crear categoria')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Crear nueva categoría</h2>

    <form action="{{ route('store.categoria') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la categoría:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar categoría</button>
        </div>
    </form>
</div>
@endsection