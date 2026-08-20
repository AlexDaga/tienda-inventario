@extends("base")

@section("titulo", "Inicio")

@section("contenido")

<link rel="stylesheet" href="{{ asset('css/saludo.css') }}">


<div class="seccion-empresa">
    <div class="texto-empresa">
        <h2>¡Hola, {{ auth()->user()->name }}! 👋</h2>

        <p><strong>Almacén Mi Barrio</strong> es tu tienda de confianza en el barrio, comprometida en ofrecer productos de calidad, precios justos y una atención cercana a cada uno de nuestros clientes.</p>

        <p><strong>MISIÓN:</strong> Brindar a nuestros vecinos productos de primera necesidad con buen precio, buena atención y la comodidad de comprar cerca de casa.</p>

        <p><strong>VISIÓN:</strong> Ser el almacén de referencia del barrio, reconocido por su variedad, confianza y calidez en el servicio.</p>
    </div>

    <div class="imagen-empresa">
        <img src="{{ asset('img/logo2.png') }}" alt="Logo Almacén Mi Barrio">
    </div>
</div>

<h3 class="titulo-productos">Productos disponibles 🏪</h3>

@endsection
