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
    public function guardar(Request $request)
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

        return redirect()->route('categoria.mostrar');
    }
    public function editar($id)
{
    $categoria = Categoria::findOrFail($id);
    return view('editar_categoria', compact('categoria'));
}

public function actualizar(Request $request, $id)
{
    $categoria = Categoria::findOrFail($id);

    $categoria->nombre = $request->nombre;
    $categoria->descripcion = $request->descripcion;

    $categoria->save();

    return redirect()->route('categoria.mostrar');
}
public function eliminar($id)
{
    $categoria = Categoria::findOrFail($id);

    if ($categoria->estatus === 'A') {
        $categoria->estatus = 'I';
    } else {
        $categoria->estatus = 'A';
    }

    $categoria->save();

    return redirect()->route('categoria.mostrar');
}
}