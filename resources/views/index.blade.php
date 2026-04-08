@php
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Venta;
use Carbon\Carbon;

$productosActivos = Producto::count();
$categoriasActivas = Categoria::where('estatus', 'A')->count();

$ventasHoy = Venta::whereDate('created_at', Carbon::today())->sum('total');

$stockBajo = Producto::whereColumn('stock', '<=', 'stock_minimo')->count();
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mercería Victoria</title>

<link rel="stylesheet" href="{{ asset('src/output.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="flex min-h-screen bg-gradient-to-br from-slate-900 to-slate-700">

@include('menu')

<div class="flex-1 flex flex-col">

<!-- HEADER -->
<header class="bg-[#1e293b] shadow px-8 py-4 flex justify-between items-center">

<h1 class="text-2xl font-semibold text-white flex items-center gap-3">
<i class="fa-solid fa-chart-line text-blue-400"></i>
Panel de Inicio
</h1>

</header>

<!-- CONTENIDO -->
<main class="p-8 space-y-8">


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">


<!-- CARD -->
<div class="bg-[#1e293b] p-6 rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition">


<div class="flex justify-between items-center">
<p class="text-slate-400 text-base font-medium">Productos activos</p>
<p class="text-4xl font-bold text-white mt-4">
{{ $productosActivos }}
</p>

<i class="fa-solid fa-box text-blue-400 text-xl"></i>
</div>

<p class="text-4xl font-bold text-white mt-4"></p>

</div>

<!-- CARD -->
<div class="bg-[#1e293b] p-6 rounded-xl shadow-lg hover:scale-105 transition transform">

    <div class="flex justify-between items-center">
        <p class="text-slate-400 text-base font-medium">Stock bajo</p>
        <i class="fa-solid fa-triangle-exclamation text-red-400 text-xl"></i>
    </div>

    <p class="text-4xl font-bold text-white mt-4">
        {{ $stockBajo }}
    </p>

</div>

<!-- CARD -->
<div class="bg-[#1e293b] p-6 rounded-xl shadow-lg hover:scale-105 transition transform">

    <div class="flex justify-between items-center">
    <p class="text-slate-400 text-base font-medium">Ventas hoy</p>
    <i class="fa-solid fa-dollar-sign text-green-400 text-xl"></i>
    </div>
    
<p class="text-4xl font-bold text-white mt-4">${{ number_format($ventasHoy, 2) }}</p>

</div>

<!-- CARD -->
<div class="bg-[#1e293b] p-6 rounded-xl shadow-lg hover:scale-105 transition transform">

<div class="flex justify-between items-center">
<p class="text-slate-400 text-base font-medium">Categorías</p>
<p class="text-4xl font-bold text-white mt-4">
{{ $categoriasActivas }}
</p>
<i class="fa-solid fa-tags text-purple-400 text-xl"></i>
</div>

<p class="text-4xl font-bold text-white mt-4"></p>

</div>

</div>

</main>

</div>

</body>
</html>
