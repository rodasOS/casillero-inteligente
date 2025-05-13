<!DOCTYPE html>
<html>
<head>
    <title>Listado de Herramientas y Movimientos</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        h2 {
            color: #555;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        thead {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        th, td {
            padding: 10px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-transform: uppercase;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e0f7fa;
            transition: background-color 0.3s ease;
        }

        .no-data {
            color: #777;
            font-style: italic;
        }

        .table-container {
            margin-bottom: 50px; /* Espacio entre las tablas */
            max-width: 1000px;
            overflow-x: auto;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-evenly;

            
            &>h1 {
                width: 80vw;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Casillero Inteligente</h1>
        <img 
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2pXZfW0SIrFr3Ekmqj0sGQDBjqzGWV4Ko4A&s" 
        alt="">
    </div>

    <div class="table-container">
        <h2>Listado de Usuarios</h2>
        @if ($usuarios->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->contrasena }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="no-data">No hay usuarios.</p>
        @endif
    </div>

    <div class="table-container">
        <h2>Listado de Herramientas</h2>
        @if ($herramientas->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad Total</th>
                        <th>Cantidad en Casillero</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($herramientas as $herramienta)
                        <tr>
                            <td>{{ $herramienta->id }}</td>
                            <td>{{ $herramienta->nombre }}</td>
                            <td>{{ $herramienta->cantidad_total }}</td>
                            <td>{{ $herramienta->cantidad_en_casillero }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="no-data">No hay herramientas disponibles.</p>
        @endif
    </div>

    <div class="table-container">
        <h2>Listado de Movimientos</h2>
        @if ($movimientos->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th> {{-- Cambiamos el encabezado a "Usuario" --}}
                    <th>Herramienta</th>
                    <th>Cantidad Herramientas</th>
                    <th>Estado de la herramienta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimientos as $movimiento)
                    <tr>
                        <td>{{ $movimiento->id }}</td>
                        <td>{{ $movimiento->nombre_usuario }}</td> {{-- Accedemos al nombre del usuario a través de la relación --}}
                        <td>{{ $movimiento->nombre_herramienta }}</td>
                        <td>{{ $movimiento->cantidad_herramientas }}</td>
                        <td>{{ $movimiento->tipo_movimiento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">No hay movimientos registrados.</p>
    @endif
    </div>

</body>
</html>