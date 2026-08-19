<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }

    public function nuevo()
    {
        return view('libros.nuevo');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'precio' => 'required|integer',
        ], [
            'titulo.required' => 'Falta el título del libro.',
            'precio.required' => 'Falta el precio del libro.',
            'precio.integer' => 'Ese precio no es un número entero.',
        ]);

        Libro::create([
            'titulo' => $request->input('titulo'),
            'precio' => $request->input('precio'),
        ]);

        return redirect('/libros');
    }
}