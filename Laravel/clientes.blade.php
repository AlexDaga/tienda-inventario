@extends("base")

@section("contenido")

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.titulo-cliente{
    text-align: center;
    color: #1a1a1a;
}
.form-container {
    width: 90%;
    max-width: 450px;
    margin: 30px auto;
    background-color: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

.form-container label {
    font-weight: bold;
    color: #1a1a1a;
    margin-bottom: 6px;
}

.form-container input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    margin-bottom: 18px;
}

.form-container input:focus {
    outline: none;
    border-color: #f4c430;
    box-shadow: 0 0 4px rgba(244, 196, 48, 0.6);
}

.btn {
    display: inline-block;
    background-color: #f4c430;
    color: #1a1a1a;
    padding: 10px 16px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    font-size: 1rem;
    font-weight: bold;
    margin-top: 10px;
}

.btn-secondary {
    background-color: #ccc;
    color: #1a1a1a;
}

.btn-secondary:hover {
    background-color: #aaa;
}
</style>

<h2 class="titulo-cliente" >Registrar nuevo cliente</h2>

<form action="{{ url('/clientes') }}" method="POST" class="form-container">
    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" required>

    <label for="telefono">Teléfono</label>
    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required>

    <label for="direccion">Dirección</label>
    <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}">

    <button type="submit" class="btn">Guardar cliente</button>
    <a href="{{ url('/clientes') }}" class="btn btn-secondary">Cancelar</a>

</form>
@endsection