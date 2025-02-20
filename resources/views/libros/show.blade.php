@extends('layouts.template')

@section('titulo', 'Listado Libros')
@section('cabecera', 'Visualizando Libro')

@section('contenido')

    <div class="libroContainer">

        <div class="libro">
            <div class="portadaContainer">
                <img class="img" src="{{ $libro->portada }}" alt="{{ $libro->titulo }}">
            </div>

            <div class="contenidoContainer">
                <h3 class="tituloLibro">{{ $libro->titulo }}</h3>
                <p>{{ $libro->autor }} | <strong>Editorial:</strong> {{ $libro->editorial }}</p>
            </div>
        </div>

        <div class="btnContainer">
            <a href="{{ route('libros.index') }}" class="btn btn-dark">Salir</a>
        </div>
    </div>
    

@endsection