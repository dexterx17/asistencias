<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Personas</title>
</head>
<body>
    <h2>Creacion de Personas</h2>

    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <div>   
            <label for="nombres">Nombres *</label>
            <input type="text" name="nombres" placeholder="Ingrese sus nombres" required>
        </div>
        <div>   
            <label for="apellidos">Apellidos *</label>
            <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>
        </div>
        <div>   
            <label for="Cedula">Cedula *</label>
            <input type="text" name="cedula" placeholder="Ingrese su cedula" required>
        </div>
        <div>   
            <label for="Edad">Edad</label>
            <input type="number" name="edad" placeholder="Ingrese su edad">
        </div>
        <div>   
            <label for="Email">Email</label>
            <input type="email" name="email" placeholder="Ingrese su email">
        </div>
        <div>
            <button type="submit">Guardar</button>
            <a href="{{ route('personas.index') }}">Atras</a>
        </div>
    </form>
</body>
</html>