<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e7f6f7;
            /* Azul suave de fondo */
            color: #333;
            /* Texto gris oscuro */
        }

        header,
        footer {
            padding: 20px;
            border-bottom: 3px solid #0288d1;
            /* Azul más oscuro */
        }

        /* Estilo del encabezado */
        header {
            background-color: #0288d1;
            /* Azul oscuro */
            color: white;
        }

        header a {
            background-color: #66bb6a;
            /* Verde esmeralda */
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #388e3c;
            /* Verde más oscuro al pasar */
        }

        /* Estilos de la tabla */
        .table-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        table th {
            background-color: #0288d1;
            /* Azul más oscuro */
            color: white;
            text-align: center;
        }

        table td {
            vertical-align: middle;
            padding: 12px;
        }

        table tr:nth-child(even) {
            background-color: #f1f8e9;
            /* Verde claro */
        }

        table tr:hover {
            background-color: #c8e6c9;
            /* Verde suave */
        }

        /* Botones de acción en las filas */
        table .btn {
            border-radius: 5px;
        }

        /* Estilo de pie de página */
        footer {
            background-color: #0288d1;
            /* Azul oscuro */
            color: white;
            text-align: center;
            font-size: 14px;
            padding-top: 10px;
        }

        footer a {
            color: white;
            text-decoration: none;
            padding: 5px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Ajustes responsivos */
        @media (max-width: 767px) {
            header {
                text-align: center;
            }

            header .d-flex {
                flex-direction: column;
            }

            header a {
                margin-bottom: 8px;
            }

            .table-container {
                padding: 15px;
            }

            table td,
            table th {
                padding: 10px;
            }
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
        <p>&copy; 2025 - Todos los derechos reservados | <a href="#">Política de privacidad</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Dbg6pdygfNh1auCDwN4X2hMqxBOJ09XzLqFh/yxs7TbHqH4Y8LRj7t1mchEYg8XJ" crossorigin="anonymous"></script>
</body>

</html>