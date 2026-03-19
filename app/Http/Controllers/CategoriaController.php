<?php
namespace App\Http\Controllers;

use App\Models\Categoria; 
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar listado de categorías
    public function mostrar()
    {
        $categorias = Categoria::all();
        return view('lista_categorias', compact('categorias'));
    }

    // Mostrar formulario para crear nueva categoría
   function nuevo(){
        return view('formulario_categoria');
    }

    // Guardar nueva categoría
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

       // if ($request->hasFile('foto')) {
            // $ruta = $request->file('foto')->store('imagenes', 'public');
            // $categoria->foto = $ruta;
        // } else {
            // $categoria->foto = 'sin foto';
        // }

         $categoria->save();

        return redirect()->route('categorias.index');
    }
}