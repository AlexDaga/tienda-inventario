@extends('layouts.app')

@section('titulo', 'Catálogo de libros')

@section('contenido')

    <h2>Catálogo de libros</h2>

    <p>
        Bienvenido a Librería El Lápiz, donde encontrarás libros para aprender,
        descubrir y disfrutar.
    </p>

    <p>
        Hay {{ count($libros) }} libros en el catálogo.
    </p>

    @foreach ($libros as $libro)
        <p>
            → {{ $libro->titulo }} - Bs {{ $libro->precio }}
        </p>
    @endforeach

    <p>
        Catálogo atendido por Alex Brayan Flores Daga
    </p>

    <a href="/libros/nuevo" class="btn">
        Registrar libro
    </a>

@endsection