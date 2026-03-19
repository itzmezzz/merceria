<?php

namespace App\Http\Controllers;
use App\Models\index; 
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function mostrar()
    {
         return view('index'); // index.blade.php en resources/views/
    }
}
