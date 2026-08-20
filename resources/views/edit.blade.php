@extends("base")

@section("titulo", "Editar producto")

@section("contenido")

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

<div class="formulario">

    <h2>Actualizar producto</h2>

    @if ($errors->any())

        <div class="errores">

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>

    @endif

    <form action="{{ url('/productos/'.$producto->id) }}" method="POST">

        @csrf

        @method('PUT')

        <label for="tipo">Tipo de producto</label>

        <select id="tipo" name="tipo" required>

            <option value="">Seleccione un tipo</option>

            <option value="abarrotes"
                {{ $producto->tipo == 'abarrotes' ? 'selected' : '' }}>
                Abarrotes
            </option>

            <option value="lacteos"
                {{ $producto->tipo == 'lacteos' ? 'selected' : '' }}>
                Lácteos
            </option>

            <option value="bebidas"
                {{ $producto->tipo == 'bebidas' ? 'selected' : '' }}>
                Bebidas
            </option>

            <option value="snacks"
                {{ $producto->tipo == 'snacks' ? 'selected' : '' }}>
                Snacks
            </option>

            <option value="limpieza"
                {{ $producto->tipo == 'limpieza' ? 'selected' : '' }}>
                Limpieza
            </option>

            <option value="otros"
                {{ $producto->tipo == 'otros' ? 'selected' : '' }}>
                Otros
            </option>

        </select>


        <label for="nombre_producto"> Nombre del producto </label>
        <input type="text" id="nombre_producto" name="nombre_producto" value="{{ $producto->nombre_producto }}" required>

        <label for="precio"> Precio (Bs)</label>
        <input type="number" id="precio" name="precio" value="{{ $producto->precio }}" min="0" required>

        <label for="cantidad"> Cantidad </label>
        <input type="number" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" min="1" required >


        <div class="botones">

            <button type="submit" class="btn">
                Actualizar producto
            </button>

            <a href="{{ url('/productos') }}" class="btn cancelar">
                Cancelar
            </a>

        </div>

    </form>

</div>

@endsection