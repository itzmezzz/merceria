<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Productos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/src/output.css">
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

@include('menu')

<main class="flex-1 p-6">

<div class="bg-white rounded shadow">

<div class="p-4 border-b flex justify-between items-center">
<input type="text" placeholder="Buscar..." class="border rounded px-3 py-2 w-64">

<a href="{{ route('formulario_producto') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
Nuevo
</a>
</div>

<table class="w-full">

<thead class="bg-gray-50">
<tr>
<th class="text-left p-3 text-sm font-semibold">Producto</th>
<th class="text-left p-3 text-sm font-semibold">Categoría</th>
<th class="text-right p-3 text-sm font-semibold">Precio</th>
<th class="text-center p-3 text-sm font-semibold">Stock</th>
<th class="text-center p-3 text-sm font-semibold">Estado</th>
<th class="text-center p-3 text-sm font-semibold">Acciones</th>
</tr>
</thead>

<tbody>

<tr class="border-b hover:bg-gray-50">
<td class="p-3">
<p class="font-semibold text-sm"></p>
<p class="text-xs text-gray-500"></p>
</td>

<td class="p-3 text-sm"></td>
<td class="p-3 text-right font-semibold"></td>
<td class="p-3 text-center"></td>

<td class="p-3 text-center">
<span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">
Activo
</span>
</td>

<td class="p-3 text-center">
<a href=""
class="text-blue-600 mx-1">
Editar
</a>

<a href=""
class="text-red-600 mx-1">
Desactivar
</a>
</td>
</tr>

<tr class="border-b hover:bg-gray-50">
<td class="p-3">
<p class="font-semibold text-sm"></p>
<p class="text-xs text-gray-500"></p>
</td>

<td class="p-3 text-sm"></td>
<td class="p-3 text-right font-semibold"></td>
<td class="p-3 text-center"></td>

<!-- cholo esta madre es para lo del estatus si activo  o inactivo -->
<td class="p-3 text-center">
<span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">
Inactivo
</span>
</td>

<!-- Este es para editar el producto  -->
<td class="p-3 text-center">
<a href=""
class="text-blue-600 mx-1">
Editar
</a>


<!-- Este es para activar XD -->

<a href=""
class="text-red-600 mx-1">
Activar
</a>
</td>
</tr>

</tbody>

</table>

</div>

</main>

</div>

</body>
</html>