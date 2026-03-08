<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class CarritoController extends Controller
{
    public function index()
    {
        $titulo = 'Nueva Venta';
        $pagina = 'carrito';
        $productos = Producto::where('activo',1)->where('stock','>',0)->get();
        $categorias = Categoria::where('estatus', 'A')->get();
        $carrito = session('carrito', []);
        return view('carrito', compact('titulo','pagina','productos','categorias','carrito'));
    }

    public function agregar(Request $request, $id)
    {
        $carrito = session('carrito', []);
        $producto = Producto::findOrFail($id);

        if(isset($carrito[$id])){
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                'id'=>$producto->id,
                'nombre'=>$producto->nombre,
                'precio_venta'=>$producto->precio_venta,
                'cantidad'=>1
            ];
        }

        session(['carrito'=>$carrito]);
        return redirect()->back();
    }

    public function eliminar(Request $request, $id)
    {
        $carrito = session('carrito', []);
        unset($carrito[$id]);
        session(['carrito'=>$carrito]);
        return redirect()->back();
    }
}