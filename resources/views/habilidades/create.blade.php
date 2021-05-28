
@extends('templates.main')

@section('title','Crear Habilidad')

@section('contenido')
    <h2>Crear Habilidad</h2>
    <form action="{{ route('habilidades.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">Persona *</label>
            <select name="persona_id" id="persona_id" class="form-control">
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombres }} {{ $persona->apellidos }}</option>
            @endforeach
            </select>
        </div>
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
@endsection