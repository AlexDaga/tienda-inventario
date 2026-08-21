<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar todos los productos.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos', compact('productos'));
    }

    /**
     * Mostrar formulario para registrar producto.
     */
    public function create()
    {
        return view('productos');
    }

    /**
     * Guardar un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'nombre_producto' => 'required',
            'precio' => 'required|integer',
            'cantidad' => 'required|integer',
        ], [
            'tipo.required' => 'Falta el tipo de producto.',
            'nombre_producto.required' => 'Falta el nombre del producto.',
            'precio.required' => 'Falta el precio.',
            'precio.integer' => 'El precio debe ser un número entero.',
            'cantidad.required' => 'Falta la cantidad.',
            'cantidad.integer' => 'La cantidad debe ser un número entero.',
        ]);

        Producto::create([
            'tipo' => $request->input('tipo'),
            'nombre_producto' => $request->input('nombre_producto'),
            'precio' => $request->input('precio'),
            'cantidad' => $request->input('cantidad'),
        ]);

        return redirect('/productos');
    }

    /**
     * Mostrar un producto específico.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Mostrar formulario para editar.
     */
    public function edit(Producto $producto)
    {
        return view('edit', compact('producto'));
    }

    /**
     * Actualizar producto.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
        'tipo' => 'required',
        'nombre_producto' => 'required',
        'precio' => 'required|integer',
        'cantidad' => 'required|integer',
    ], [
        'tipo.required' => 'Falta el tipo de producto.',
        'nombre_producto.required' => 'Falta el nombre del producto.',
        'precio.required' => 'Falta el precio.',
        'precio.integer' => 'El precio debe ser un número entero.',
        'cantidad.required' => 'Falta la cantidad.',
        'cantidad.integer' => 'La cantidad debe ser un número entero.',
    ]);

    $producto->update([
        'tipo' => $request->input('tipo'),
        'nombre_producto' => $request->input('nombre_producto'),
        'precio' => $request->input('precio'),
        'cantidad' => $request->input('cantidad'),
    ]);

    return redirect('/productos');

    }

    /**
     * Eliminar producto.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}