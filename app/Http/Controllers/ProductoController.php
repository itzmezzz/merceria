<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    
    // LISTA
    public function index()
    {
        $productos = Producto::all();
        return view('lista_producto', compact('productos'));
    }

    // FORMULARIO
    public function formulario()
    {
        return view('formulario_producto');
    }

    // GUARDAR
    public function guardar(Request $req)
    {
        $producto = new Producto();

        $producto->nombre = $req->nombre;
        $producto->descripcion = $req->descripcion;
        $producto->precio_compra = $req->precio_compra;
        $producto->precio_venta = $req->precio_venta;
        $producto->stock = $req->stock;
        $producto->stock_minimo = $req->stock_minimo;
        $producto->categoria_id = $req->categoria_id;
        $producto->proveedor_id = $req->proveedor_id;

        // IMAGEN
        if ($req->hasFile('foto')) {
            $ruta = $req->file('foto')->store('imagenes', 'public');
            $producto->foto = $ruta;
        } else {
            $producto->foto = 'sin foto'; 
        }

        $producto->save();

        return redirect()->route('lista_producto');
    }
     function nuevo(){
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('formulario_producto', compact('categorias', 'proveedores'));
    }

}