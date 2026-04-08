<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    function mostrar()
    {
        $productosActivos = Producto::count();
    $categoriasActivas = Categoria::where('estatus', 'A')->count();

    return view('index', compact('productosActivos', 'categoriasActivas'));
    }
}
