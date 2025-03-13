@extends('app')

@section('titulo','Categorias')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="
    font-size: 2.8rem; 
    font-weight: bold; 
    text-transform: uppercase; 
    letter-spacing: 2px; 
    background: linear-gradient(90deg,rgb(5, 189, 167) 0%, #00838f 40%, #03a9f4 70%, #81c784 100%);
    -webkit-background-clip: text; 
    color: transparent; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 15px rgba(3, 169, 244, 0.7); 
    border-bottom: 4px solid #00838f; 
    padding-bottom: 8px;">Lista de Categorías</h2>

    <!-- Botón para crear categoría -->
    <div class="text-end mb-4">
        <a href="{{ route('create.categoria') }}" class="btn btn-success">Crear Categoría</a>
    </div>

    <!-- Tabla de categorías -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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