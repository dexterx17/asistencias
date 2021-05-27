<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisatdo de Habilidades</title>
</head>
<body>
    <h1>Listado de Habilidades
        <a href="{{ route('habilidades.create') }}">Nuevo</a>
    </h1>
    <table border="1">
        <thead> 
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Porcentaje</th>
                <th>Orden</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habilidades as $habilidad)
            <tr>
                <td>{{ $habilidad->nombre }}</td>
                <td>{{ $habilidad->porcentaje }}</td>
                <td>{{ $habilidad->orden }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>