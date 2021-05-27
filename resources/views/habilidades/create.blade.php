<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('habilidades.store')}}" method="post">
        @csrf

        <div>
            <label for="nombre">Nombre *</label>
            <input type="text" name="nombre" placeholder="Nombre de la habilidad" required>
        </div>
        <div>
            <label for="porcentaje">Porcentaje *</label>
            <input type="number" name="porcentaje" placeholder="Porcentaje de la habilidad" required>
        </div>
        <div>
            <label for="orden">Orden</label>
            <input type="number" name="orden" placeholder="Orden de la habilidad">
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>