<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header,
        footer {
            padding: 10px 20px;
        }

        header {
            background-color: goldenrod;
            color: white;
        }

        footer {
            background-color: goldenrod;
            color: white;
            text-align: center;
            font-size: 14px;
        }

        header a {
            background-color: black;
            text-decoration: none;
            color: white;
            padding: 5px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #444;
        }

        table th,
        table td {
            vertical-align: middle;
        }

        .table-container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header class="d-flex justify-content-between align-items-center">
        <div>
            <a href="{{ route('index.productos') }}">Inventario</a>
        </div>
        <div class="d-flex">
            <a href="{{ route('index.productos') }}">Lista productos</a>
            <a href="{{ route('index.categorias') }}">Lista categorías</a>
            <a href="{{ route('index.proveedores') }}">Lista proveedores</a>
        </div>
    </header>

    <div class="table-container container">
        <table class="table table-striped table-bordered table-hover table-sm">
            @yield('content')
        </table>
    </div>

    <footer>
        <p>&copy; 2025 - Todos los derechos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Dbg6pdygfNh1auCDwN4X2hMqxBOJ09XzLqFh/yxs7TbHqH4Y8LRj7t1mchEYg8XJ" crossorigin="anonymous"></script>
</body>

</html>