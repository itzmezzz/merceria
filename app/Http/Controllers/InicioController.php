<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Venta;

class InicioController extends Controller
{
    public function index()
    {
        $titulo = 'Inicio';
        $pagina = 'inicio';

        $totalProductos = Producto::where('activo', 1)->count();
        $stockBajo = Producto::whereColumn('stock', '<=', 'stock_minimo')->count();
        $ventasHoy = Venta::whereDate('fecha', now())->sum('total');
        $totalCategorias = Categoria::count();

        return view('index', compact(
            'titulo', 'pagina', 'totalProductos', 'stockBajo', 'ventasHoy', 'totalCategorias'
        ));
    }
}