@extends("base")

@section("titulo", "Nuevo producto")

@section("contenido")

<link rel="stylesheet" href="{{ asset('css/productos.css') }}">

<div class="formulario">

    <h2>Registrar nuevo producto</h2>

    @if ($errors->any())
        <div class="errores">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/productos') }}" method="POST">

        @csrf

        <label for="tipo">Tipo de producto</label>

        <select id="tipo" name="tipo" required>
            <option value="">Seleccione un tipo</option>
            <option value="abarrotes">Abarrotes</option>
            <option value="lacteos">Lácteos</option>
            <option value="bebidas">Bebidas</option>
            <option value="snacks">Snacks</option>
            <option value="limpieza">Limpieza</option>
            <option value="otros">Otros</option>
        </select>

        <label for="nombre_producto">Nombre del producto</label>
        <input type="text" id="nombre_producto" name="nombre_producto" value="{{ old('nombre_producto') }}"
            required>

        <label for="precio">Precio (Bs)</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}" min="0" required >

        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" value="{{ old('cantidad', 1) }}" min="1" required>

        <div class="botones">

            <button type="submit" class="btn">
                Registrar producto
            </button>

            <a href="{{ url('/productos') }}" class="btn cancelar">
                Cancelar
            </a>

        </div>

    </form>

</div>

<div class="lista-productos">

    <h2>Productos registrados</h2>

    @if ($productos->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Precio (Bs)</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ ucfirst($producto->tipo) }}</td>
                        <td>{{ $producto->nombre_producto }}</td>
                        <td>{{ number_format($producto->precio, 2) }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td> <a href="{{ url('/productos/'.$producto->id.'/edit') }}" class="btn-editar">
                               Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aún no hay productos registrados.</p>
    @endif

</div>

@endsection