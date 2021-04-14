<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function bienvenida($nombre = 'Viajero', $apellido = null)
    {
        return view('paginas-inicio.bienvenida', compact('nombre', 'apellido'))
            ->with(['nombre_mayusculas' => strtoupper($nombre)]);
    }

    public function contacto()
    {
        return view('paginas-inicio/contacto');
    }
}