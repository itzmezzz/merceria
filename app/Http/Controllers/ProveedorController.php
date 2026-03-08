<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Muestra el listado de proveedores (diseño estático).
     */
    public function index()
    {
        return view('lista_proveedor');
    }

    /**
     * Muestra el formulario de nuevo proveedor (diseño estático).
     */
    public function create()
    {
        return view('formulario_proveedor');
    }

    /**
     * Método “fake” para que la ruta POST no falle.
     */
    public function store(Request $request)
    {
        return redirect()->route('proveedores.index');
    }

    /**
     * Método “fake” para permitir la ruta toggle sin lógica.
     */
    public function toggleActivo($id)
    {
        return redirect()->back();
    }
}
