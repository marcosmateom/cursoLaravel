@extends('layout')

@section('title', "Crear usuario")

@section('content')
<div class="card">
    <h3 class="card-header">Crear Usuario</h3>
    <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrige los errores debajo:</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        
            <form method="POST" action="{{ url('usuarios') }}">
                {{ csrf_field() }}
        
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name') }}">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
                </div>
                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>
            </form>
    </div>
</div>

@endsection