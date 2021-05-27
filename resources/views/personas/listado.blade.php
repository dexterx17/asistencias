<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado personas</title>
</head>
<body>
    <h1>Listado de Personas
    <a href="{{ route('personas.create') }}">Nuevo</a>
    </h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->nombres }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->cedula }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->email }}</td>
                    <td>
                        <a href="{{ route('personas.edit',$persona->id) }}">Editar</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>