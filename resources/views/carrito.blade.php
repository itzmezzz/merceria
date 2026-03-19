<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nueva Venta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

@include('menu')

<!-- CONTENIDO -->
<main class="flex-1 p-6">

<div class="flex gap-6 h-[calc(100vh-80px)]">

<!-- PRODUCTOS -->
<div class="flex-1 bg-white rounded-lg shadow-sm flex flex-col overflow-hidden">

<!-- 🔍 BUSCADOR -->
<form class="p-4 flex gap-2 border-b bg-gray-100">

    <div class="relative flex-1">
        <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
        <input 
            type="text" 
            placeholder="Buscar producto..."
            class="w-full bg-white border border-gray-300 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
        >
    </div>

    <select class="bg-white border border-gray-300 rounded-lg px-3 py-2">
        <option>Todas</option>
        <option>Hilos</option>
        <option>Botones</option>
        <option>Cierres</option>
    </select>

    <button class="bg-blue-600 text-white px-4 rounded-lg hover:bg-blue-700">
        Buscar
    </button>

</form>

<!-- 📦 GRID -->
<div class="flex-1 flex items-start p-6">

    <!-- 🧵 CARD -->
    <div class="w-64 bg-white border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition">

        <div class="flex justify-between">
            <p class="text-gray-800 font-semibold text-sm">Hilo Rojo</p>
            <i class="fa-solid fa-box text-gray-400"></i>
        </div>

        <p class="text-blue-600 font-bold mt-2">$25</p>
        <p class="text-xs text-gray-500">Hilos</p>

        <button class="mt-3 w-full bg-green-500 text-white py-1 rounded-lg text-sm hover:bg-green-600 flex items-center justify-center gap-2">
            <i class="fa-solid fa-cart-plus"></i>
            Agregar
        </button>

    </div>

</div>

</div>

<!-- 🧾 CARRITO -->
<div class="w-96 bg-white border border-gray-300 rounded-lg shadow-sm flex flex-col overflow-hidden">

<div class="bg-slate-800 text-white p-4 flex justify-between items-center">
<h3 class="font-bold">Ticket</h3>
<i class="fa-solid fa-receipt"></i>
</div>

<div class="flex-1 p-4 text-gray-500 text-sm">
    Aquí se mostrará el carrito
</div>

<div class="p-4 bg-gray-100 border-t border-gray-300">

<div class="flex justify-between text-lg font-semibold text-gray-800 mb-4">
<span>Total</span>
<span class="text-blue-600">$0</span>
</div>

<button class="w-full bg-green-600 text-white py-3 rounded-lg font-bold hover:bg-green-700 flex items-center justify-center gap-2">
<i class="fa-solid fa-cash-register"></i>
COBRAR
</button>

</div>

</div>

</div>

</main>

</div>

</body>
</html>