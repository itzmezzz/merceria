<?php

namespace App\Http\Controllers;
use App\Models\Categoria; 
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
     function index()
    {
        $categorias = Categoria::all();
        return view('lista_categorias', compact('categorias'));
    }
    
    function guardar(Request $req){
        $categoria = new Categoria();
        $categoria->nombre = $req->nombre;
        $categoria->descripcion = $req->descripcion;
        $categoria->save();

        return redirect()->route('categoria.mostrar'); // Redirige al listado después de guardar
    }
    function mostrar(){
         $categorias = Categoria::all();
     return view('lista_categorias', compact('categorias'));

    }

     function create()
    {
        return view('formulario_categoria');
    }

     function store(Request $request)
    {
        // No backend persistence; redirige al listado.
        return redirect()->route('categorias.index');
    }
        function formulario()
        {
            return view('formulario_categoria');

        }
}