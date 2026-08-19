@extends('layouts.app')

@section('titulo', 'Registrar libro')

@section('contenido')

    <h2>Registrar libro</h2>

    @if ($errors->any())
        <div>
            <h3>Hay algunos errores:</h3>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/libros/nuevo" method="POST">

        @csrf

        <div>
            <label for="titulo">Título del libro</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                value="{{ old('titulo') }}"
            >
        </div>

        <br>

        <div>
            <label for="precio">Precio en Bs</label>
            <input
                type="number"
                id="precio"
                name="precio"
                value="{{ old('precio') }}"
            >
        </div>

        <br>

        <button type="submit">
            Registrar libro
        </button>

    </form>

@endsection