@extends('app')

@section('titulo','Categorias')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Lista de Categorías</h2>

    <!-- Botón para crear categoría -->
    <div class="text-end mb-4">
        <a href="{{ route('create.categoria') }}" class="btn btn-success">Crear Categoría</a>
    </div>

    <!-- Tabla de categorías -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre de la categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombre }}</td>
                <td>
                    <a href="{{ route('editar.categoria', $categoria->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('eliminar.categoria', $categoria->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection