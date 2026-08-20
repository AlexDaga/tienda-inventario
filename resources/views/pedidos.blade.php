@extends("base")

@section("titulo", "Nuevo pedido")

@section("contenido")

<link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">

<h2>Registrar nuevo pedido</h2>

<form action="{{ url('/pedidos') }}" method="POST" class="form-container">
    @csrf

    <label for="cliente">Nombre del cliente</label>
    <input type="text" id="cliente" name="cliente" value="{{ old('cliente') }}" required>

    <label for="categoria">Categoría del producto</label>
    <select id="categoria" name="categoria" required>
        <option value="">-- Selecciona una categoría --</option>
        <option value="abarrotes" {{ old('categoria') == 'abarrotes' ? 'selected' : '' }}>Abarrotes</option>
        <option value="lacteos" {{ old('categoria') == 'lacteos' ? 'selected' : '' }}>Lácteos</option>
        <option value="bebidas" {{ old('categoria') == 'bebidas' ? 'selected' : '' }}>Bebidas</option>
        <option value="snacks" {{ old('categoria') == 'snacks' ? 'selected' : '' }}>Snacks</option>
        <option value="limpieza" {{ old('categoria') == 'limpieza' ? 'selected' : '' }}>Limpieza</option>
        <option value="otros" {{ old('categoria') == 'otros' ? 'selected' : '' }}>Otros</option>
    </select>

    <label for="producto">Producto</label>
    <input type="text" id="producto" name="producto" value="{{ old('producto') }}" required>

    <label for="precio">Precio (Bs)</label>
    <input type="number" id="precio" name="precio" step="0.01" min="0" value="{{ old('precio') }}" required>

    <label for="cantidad">Cantidad</label>
    <input type="number" id="cantidad" name="cantidad" min="1" value="{{ old('cantidad', 1) }}" required>

    <button type="submit" class="btn">Registrar pedido</button>
    <a href="{{ url('/pedidos') }}" class="btn btn-secondary">Cancelar</a>

</form>
@endsection