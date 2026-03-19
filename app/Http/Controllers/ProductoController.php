<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
    {
        return view('inventario');
    }

    
  public function formulario()
{
    return view('formulario_producto');
}

   
    

    
   
}
