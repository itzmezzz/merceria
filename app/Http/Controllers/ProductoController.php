<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra la vista de inventario (diseño estático).
     */
    public function index()
    {
        return view('inventario');
    }

    /**
     * Muestra el formulario de “nuevo producto” (diseño estático).
     */
    public function create()
    {
        return view('formulario_producto');
    }

    /**
     * Método “fake” para que la ruta POST no falle.
     */
    public function store(Request $request)
    {
        return redirect()->route('productos.index');
    }

    /**
     * Método “fake” para permitir la ruta toggle sin lógica de backend.
     */
    public function toggleActivo($id)
    {
        return redirect()->back();
    }
}
