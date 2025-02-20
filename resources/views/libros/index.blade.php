@extends('layouts.template')

@section('titulo', 'Listado Libros')
@section('cabecera', 'Listado Libros')

@section('contenido')

    <div class="divBtn">
        @if(!auth()->check())
            <a class="btn btn-primary botonesSesion" href="{{ route('login') }}">Iniciar Sesión</a>
        @endif   
        @if(auth()->check())
        <a class="btn btn-danger botonesSesion" href="{{ route('logout') }}">Cerrar Sesión</a>
        @endif 
    </div>

    <div class="formContainer">
        <table class="table table-striped">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                @if(auth()->check())
                <th>Ver Más</th>
                @endif
            </tr>
            @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->titulo}}</td>
                <td>{{ $libro->autor}}</td>
                <td>{{ $libro->editorial}}</td>
                @if(auth()->check())
                <td>
                    <a class="btn btn-primary" href="#">Historial Préstamos</a>
                    <a class="btn btn-success" href="{{ route('libros.show', $libro )}}">Detalles del Libro</a>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
    
    

@endsection