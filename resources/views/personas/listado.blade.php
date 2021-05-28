@extends('templates.main')

@section('title','Listado de Personas')

@section('contenido')

<example-component></example-component>

<h1>Listado de Personas
    <a href="{{ route('personas.create') }}">Nuevo</a>
</h1>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success')}}
</div>
@endif

<table class="table table-dark table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombr☻es</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Habilidades</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr class="@if($loop->first) table-danger @endif">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $persona->nombres }}</td>
                <td>{{ $persona->nombres }}</td>
                <td>{{ $persona->apellidos }}</td>
                <td>{{ $persona->cedula }}</td>
                <td>{{ $persona->edad }}</td>
                <td>{{ $persona->email }}</td>
                <td>0</td>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('personas.edit',$persona->id) }}">Editar</a>
                    <form action="{{ route('personas.destroy',$persona->id) }}"  method="post">
                            @csrf
                            @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Eliminar</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection