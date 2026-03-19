<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    function guardar(Request $request){
       $proveedor = new Proveedor();
        $proveedor->nombre = $request->nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->direccion = $request->direccion;
        $proveedor->save();

        return redirect()->route('lista_proveedor');
    }
    public function mostrar()
    {
         $proveedores = Proveedor::all(); // Trae todos los proveedores
    return view('lista_proveedor', compact('proveedores'));
}
    
    

    /**
     * Muestra el formulario de nuevo proveedor (diseño estático).
     */
    public function nuevo()
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
