<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Caja;

class VentaController extends Controller
{
    // 🛒 Vista principal (carrito)
public function index(Request $request)
{
    $buscar = $request->buscar;
    $categoria = $request->categoria;

    $productos = Producto::when($buscar, function ($query, $buscar) {
        $query->where('nombre', 'LIKE', "%{$buscar}%");
    })
    ->when($categoria, function ($query, $categoria) {
        $query->where('categoria_id', $categoria);
    })
    ->get();

    $carrito = session('carrito', []);

    $total = 0;

    foreach ($carrito as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }

    $categorias = \App\Models\Categoria::all();

    return view('carrito', compact('productos', 'carrito', 'total', 'categorias'));
}

    // ➕ Agregar producto
  public function agregar(Request $request)
{
    $producto = Producto::findOrFail($request->producto_id);

    $carrito = session()->get('carrito', []);

    if (isset($carrito[$producto->id])) {
        $carrito[$producto->id]['cantidad']++;

        $carrito[$producto->id]['subtotal'] =
            $carrito[$producto->id]['cantidad'] * $carrito[$producto->id]['precio'];
    } else {
        $carrito[$producto->id] = [
            'id' => $producto->id,
            'nombre' => $producto->nombre,
            'cantidad' => 1,
            'precio' => $producto->precio_venta,
            'subtotal' => $producto->precio_venta,
            'foto' => $producto->foto
                ? asset('storage/' . $producto->foto)
                : 'https://via.placeholder.com/50',
        ];
    }

    session()->put('carrito', $carrito);

    return response()->json([
        'success' => true,
        'item' => [
            'id' => $producto->id,
            'nombre' => $producto->nombre,
            'precio' => $producto->precio_venta,
            'cantidad' => $carrito[$producto->id]['cantidad'],
            'subtotal' => $carrito[$producto->id]['subtotal'],
            'foto' => $producto->foto
                ? asset('storage/' . $producto->foto)
                : 'https://via.placeholder.com/50',
        ]
    ]);

}

    // ❌ Eliminar producto
    public function eliminar(Request $request)
    {
        $carrito = session()->get('carrito', []);
        unset($carrito[$request->producto_id]);

        session()->put('carrito', $carrito);

        return back();
    }

    // 💰 Cobrar venta
   public function cobrar()
{
    $carrito = session()->get('carrito', []);

    if (empty($carrito)) {
        return back()->with('error', 'Carrito vacío');
    }

    $total = array_sum(array_column($carrito, 'subtotal'));
   session()->forget('carrito');
    // 🔥 OBTENER CAJA ABIERTA
    $caja = Caja::where('estatus', 'A')->first();

    if (!$caja) {
        return back()->with('error', 'No hay caja abierta');
    }

    // 🧾 GUARDAR VENTA
    $venta = Venta::create([
        'fecha' => now(),
        'total' => $total,
        'usuario_id' => auth()->id() ?? 1,
        'caja_id' => $caja->id,
        'estatus' => 'A'
    ]);

    // 📦 DETALLE DE VENTA
    foreach ($carrito as $item) {
       // 🔴 BUSCAR PRODUCTO
    $producto = \App\Models\Producto::find($item['id']);

    if ($producto) {

        // ⚠️ VALIDAR STOCK
        if ($producto->stock < $item['cantidad']) {
            return back()->with('error', 'Stock insuficiente de: ' . $producto->nombre);
        }

        // 📉 DESCONTAR STOCK
        $producto->stock -= $item['cantidad'];
        $producto->save();
    }

    // 📦 GUARDAR DETALLE DE VENTA
    \App\Models\DetalleVenta::create([
        'venta_id' => $venta->id,
        'producto_id' => $item['id'],
        'cantidad' => $item['cantidad'],
        'precio_venta' => $item['precio'],
        'subtotal' => $item['precio'] * $item['cantidad'],
        'estatus' => 'A'
    ]);
    }

    // 🧹 LIMPIAR CARRITO
    session()->forget('carrito');

    return redirect()->route('carrito')
        ->with('success', 'Venta realizada correctamente');
}
}