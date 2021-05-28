@extends('templates.main')

@section('title','Crear Personas')

@section('contenido')

    <h2>Creacion de Personas</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        <div  class="form-group">   
            <label for="nombres">Nombres *</label>
            <input type="text" name="nombres" value="{{ old('nombres') }}"  class="form-control @error('nombres') is-invalid @enderror " placeholder="Ingrese sus nombres" required>
            @error('nombres')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div  class="form-group">   
            <label for="apellidos">Apellidos *</label>
            <input type="text" name="apellidos" value="{{ old('apellidos') }}" class="form-control @error('apellidos') is-invalid @enderror"  placeholder="Ingrese sus apellidos" required>
            @error('apellidos')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div  class="form-group">   
            <label for="Cedula">Cedula *</label>
            <input type="text" name="cedula"  value="{{ old('cedula') }}" class="form-control form-control-lg @error('cedula') is-invalid @enderror"  placeholder="Ingrese su cedula" required>
            @error('cedula')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div  class="form-group">   
            <label for="Edad">Edad</label>
            <input type="number" name="edad" value="{{ old('edad') }}" class="form-control @error('edad') is-invalid @enderror"  placeholder="Ingrese su edad">
            @error('edad')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div  class="form-group">   
            <label for="Email">Email</label>
            <input type="email" name="email"  value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"  placeholder="Ingrese su email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div>
            <button class="btn btn-outline-primary" type="submit">Guardar</button>
            <a class="btn btn-outline-secondary" href="{{ route('personas.index') }}">Atras</a>
        </div>
    </form>
@endsection