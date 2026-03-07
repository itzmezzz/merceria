<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('lista_categorias', compact('categorias'));
    }

    public function create()
    {
        return view('formulario_categoria');
    }

    public function store(Request $request)
    {
        // No backend persistence; redirige al listado.
        return redirect()->route('categorias.index');
    }

    public function toggleActivo($id)
    {
        // Sin lógica real; solo retorna a la página anterior.
        return redirect()->back();
    }
}