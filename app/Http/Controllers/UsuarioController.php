<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function nuevo()
    {
        return view('formulario_usuario');
    }

    public function guardar(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // sin encriptar como tú quieres
            'rol' => $request->rol,
            'estatus' => 'A'
        ]);

        return redirect()->route('index');
    }

    public function lista()
{
    $usuarios = User::all();
    return view('lista_usuario', compact('usuarios'));
}
public function desactivar($id)
{
    $usuario = User::findOrFail($id);

    
    $usuario->estatus = $usuario->estatus === 'A' ? 'I' : 'A';

    $usuario->save();

    return redirect()->back();
}
public function editar($id)
{
    $usuario = User::findOrFail($id);
    return view('editar_usuario', compact('usuario'));
}

public function actualizar(Request $request, $id)
{
    $usuario = User::findOrFail($id);

    $usuario->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'rol' => $request->rol
    ]);

    return redirect()->route('usuario.lista');
}
}
