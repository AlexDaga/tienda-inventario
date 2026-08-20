@extends("base")

@section("titulo", "Registrar venta")

@section("contenido")

<link rel="stylesheet" href="{{ asset('css/ventas.css') }}">

<div class="formulario">

    <h2>Registrar nueva venta</h2>

    <form>

        <label for="producto">Producto</label>

        <select id="producto" name="producto">
            <option value="">Seleccione un producto</option>
            <option value="arroz">Arroz</option>
            <option value="leche">Leche</option>
            <option value="gaseosa">Gaseosa</option>
            <option value="galletas">Galletas</option>
        </select>

        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" min="1" placeholder="Ingrese la cantidad">

        <label for="precio">Precio unitario (Bs)</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" placeholder="Ingrese el precio">

        <label for="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente" placeholder="Nombre del cliente">

        <label for="metodo_pago">Método de pago</label>

        <select id="metodo_pago" name="metodo_pago">
            <option value="">Seleccione un método</option>
            <option value="efectivo">Efectivo</option>
            <option value="qr">QR</option>
            <option value="tarjeta">Tarjeta</option>
        </select>

        <div class="botones">

            <button type="button" class="btn">
                Registrar venta
            </button>

            <a href="{{ url('/') }}" class="btn cancelar">
                Cancelar
            </a>

        </div>

    </form>

</div>


<div class="lista-ventas">

    <h2>Ventas registradas</h2>

    <table>

        <thead>

            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Cliente</th>
                <th>Método de pago</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>Arroz</td>
                <td>2</td>
                <td>Bs 15.00</td>
                <td>Juan Pérez</td>
                <td>Efectivo</td>
            </tr>

            <tr>
                <td>Leche</td>
                <td>1</td>
                <td>Bs 8.00</td>
                <td>María López</td>
                <td>QR</td>
            </tr>

        </tbody>

    </table>

</div>

@endsection