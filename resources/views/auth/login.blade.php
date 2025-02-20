@extends('layouts.template')

@section('titulo', 'Login')
@section('cabecera', 'Login')

@section('contenido')

    @if (!empty($error))
        <div class="text-danger">
            {{ $error }}
        </div>
    @endif

    <form class="form" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="formContent">
            <div class="form-group mb-3 row">
                <label for="login">Login:</label>
                <input type="text" class="form-control" name="login" id="login" placeholder="Introduzca el usuario"/>
            </div>
            <div class="form-group mb-3 row">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Introduzca la contraseña"/>
            </div>
        </div>
        <button type="submit" name="enviar" class="btn btn-dark btn-block mb-3 boton">Entrar</button>
    </form>
    <a href="{{ route('libros.index') }}">Ver listado de libros sin iniciar sesión</a>

@endsection