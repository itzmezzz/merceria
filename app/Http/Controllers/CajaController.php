<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caja;

class CajaController extends Controller
{
    // Mostrar cajas (opcional)
    public function index()
    {
        $cajas = Caja::all();
        return view('cajas.index', compact('cajas'));
    }

    // Abrir caja
    public function abrir(Request $request)
    {
        // cerrar cualquier caja abierta antes (opcional pero recomendado)
        Caja::where('estatus', 'A')->update([
            'estatus' => 'C',
            'fecha_cierre' => now()
        ]);

        $caja = Caja::create([
            'fecha_apertura' => now(),
            'monto_inicial' => $request->monto_inicial,
            'estatus' => 'A',
            'user_id' => auth()->id() ?? 1
        ]);

        return back()->with('success', 'Caja abierta correctamente');
    }

    // Obtener caja activa (helper opcional)
    public static function cajaActiva()
    {
        return Caja::where('estatus', 'A')->first();
    }
    public function cerrar()
{
    $caja = Caja::where('estatus', 'A')->first();

    if (!$caja) {
        return back()->with('error', 'No hay caja abierta');
    }

    $caja->update([
        'fecha_cierre' => now(),
        'estatus' => 'C'
    ]);

    return back()->with('success', 'Caja cerrada correctamente');
}
// 📊 LISTA DE CORTES
public function cortes(Request $request)
{
    $query = \App\Models\Caja::query();

    if ($request->fecha_inicio && $request->fecha_fin) {
        $query->whereBetween('fecha_apertura', [
            $request->fecha_inicio . ' 00:00:00',
            $request->fecha_fin . ' 23:59:59'
        ]);
    } elseif ($request->fecha_inicio) {
        $query->whereDate('fecha_apertura', $request->fecha_inicio);
    }

    // 🔥 AQUÍ ESTÁ LA CLAVE
    $cajas = $query->orderBy('fecha_apertura', 'desc')->get();

    return view('cortes', compact('cajas'));
}

// 🔍 DETALLE
public function detalle($id)
{
    $caja = \App\Models\Caja::findOrFail($id);

    $ventas = \App\Models\Venta::where('caja_id', $caja->id)->get();

    $totalVentas = $ventas->sum('total');

    return view('caja_detalle', compact('caja', 'ventas', 'totalVentas')); // 👈 SIN carpeta
}
}