@extends('layouts.template')

@section('titulo', 'Listado Libros')
@section('cabecera', 'Listado Libros')

@section('contenido')

    <div class="formContainer">
        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de devolución</th>
                <th>Acción</th>
            </tr>
            @foreach($socios as $socio)
            <tr>
                <td>{{ $socio->nombre}}</td>
                <td>{{ $socio->email}}</td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('socios.show', $socio) }}">Préstamos</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div>
        {{ $socios->links() }}
    </div>
    
    
    

@endsection