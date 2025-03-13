@extends('app')

@section('titulo', 'Productos')

@section('content')
<div class="container mt-5">
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
    padding-bottom: 8px;">
        Lista de Productos
    </h2>



    <!-- Botón para crear producto -->
    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('create.producto') }}" class="btn btn-success btn-lg">Crear Producto</a>
    </div>

    <!-- Tabla de productos -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre del Producto</th>
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
                    <td class="d-flex justify-content-start">
                        <!-- Botón para redirigir a la página de detalles del producto -->
                        <a href="{{ route('detalles.producto', $producto->id) }}" class="btn btn-info btn-sm me-2">Ver Detalles</a>

                        <!-- Botón de edición -->
                        <a href="{{ route('editar.producto', $producto->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>

                        <!-- Formulario de eliminación -->
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
    </div><br>
</div>
@endsection