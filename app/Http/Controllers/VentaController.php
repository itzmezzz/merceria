<?php

namespace App\Http\Controllers;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    function mostrar()
    {
         return view('venta'); // venta.blade.php en resources/views/
    }
}
