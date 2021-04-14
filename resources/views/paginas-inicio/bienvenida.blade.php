@extends('layouts.basico')

@section('contenido')
    <h1>
        Hola {{ $nombre_mayusculas }}
    </h1>
    <p>{{ $nombre }} {{ $apellido }}</p>
@endsection