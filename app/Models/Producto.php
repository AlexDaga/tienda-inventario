<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Tabla de la base de datos
    protected $table = 'productos';

    protected $fillable = [
        'tipo',
        'nombre_producto',
        'precio',
        'cantidad'
    ];
}
