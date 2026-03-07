<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nueva Venta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="/src/output.css">
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

@include('menu')

<!-- CONTENIDO -->
<main class="flex-1 p-6">

<div class="flex gap-6 h-[calc(100vh-80px)]">

<!-- PRODUCTOS -->
<div class="flex-1 bg-white rounded shadow flex flex-col">

<!-- Buscador -->
<div class="p-4 flex gap-2">
<input type="text" placeholder="Buscar producto..." class="flex-1 border rounded px-3 py-2">

<select class="border rounded px-3 py-2">
<option>Todas las categorías</option>
<option>Hilos</option>
<option>Botones</option>
<option>Cierres</option>
</select>
</div>

<!-- GRID PRODUCTOS -->
<div class="flex-1 overflow-y-auto p-4 grid grid-cols-4 gap-4">

<div class="rounded p-4 cursor-pointer">
<p class="font-semibold text-sm"></p>
<p class="text-blue-600 font-bold"></p>
<p class="text-xs text-gray-500"></p>
</div>

<div class="rounded p-4 cursor-pointer">
<p class="font-semibold text-sm"></p>
<p class="text-blue-600 font-bold"></p>
<p class="text-xs text-gray-500"></p>
</div>

<div class="rounded p-4 cursor-pointer">
<p class="font-semibold text-sm"></p>
<p class="text-blue-600 font-bold"></p>
<p class="text-xs text-gray-500"></p>
</div>

<div class="rounded p-4 cursor-pointer">
<p class="font-semibold text-sm"></p>
<p class="text-blue-600 font-bold"></p>
<p class="text-xs text-gray-500"></p>
</div>

</div>
</div>

<!-- TICKET -->
<div class="w-96 bg-white rounded shadow flex flex-col">

<div class="bg-slate-800 text-white p-4 rounded-t">
<h3 class="font-bold"></h3>
</div>

<div class="flex-1 overflow-y-auto p-4">

<div class="py-2">
<div class="flex justify-between">
<p class="font-semibold text-sm"></p>
<button class="text-red-500 text-xs"></button>
</div>

<div class="flex justify-between items-center mt-1">
<span class="text-sm font-semibold"></span>
<p class="font-bold text-sm"></p>
</div>
</div>

<div class="py-2">
<div class="flex justify-between">
<p class="font-semibold text-sm"></p>
<button class="text-red-500 text-xs"></button>
</div>
</div>

</div>

<div class="p-4 bg-gray-50 rounded-b">

<div class="flex justify-between text-lg font-bold mb-4">
<span></span>
<span class="text-blue-600"></span>
</div>

<button class="w-full bg-green-600 text-white py-3 rounded font-bold hover:bg-green-700">
COBRAR
</button>

</div>

</div>

</div>

</main>

</div>

</body>
</html>