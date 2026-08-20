@extends('base')

@section('titulo', 'Contáctanos - Almacén Mi Barrio')

@section('contenido')

<link rel="stylesheet" href="{{ asset('css/contactos.css') }}">

<section class="contacto">

    <h2>Contáctanos</h2>

    <p>
        Estamos para atenderte y ayudarte con tus compras. 
        Visítanos en nuestra tienda o comunícate con nosotros.
    </p>

    <div class="datos-contacto">

        <article>
            <h3>📍 Dirección</h3>
            <p>
                Calle Villa Esperanza<br>
                Tiquipaya, Cochabamba, Bolivia
            </p>
        </article>

        <article>
            <h3>📞 Teléfono</h3>
            <p>
                707 456 789
            </p>
        </article>

        <article>
            <h3>📧 Correo electrónico</h3>
            <p>
                contacto@almacenmibarrio.com
            </p>
        </article>

        <article>
            <h3>🕒 Horarios de atención</h3>
            <p>
                Lunes a sábado: 08:00 - 20:00<br>
                Domingo: 09:00 - 14:00
            </p>
        </article>

    </div>

    <div class="mensaje-contacto">
        <h3>¡Gracias por preferirnos!</h3>

        <p>
            En <strong>Almacén Mi Barrio</strong> trabajamos para ofrecerte
            productos de calidad, variedad y buenos precios.
        </p>
    </div>

</section>

@endsection