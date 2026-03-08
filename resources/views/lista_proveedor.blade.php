<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proveedores - Mercería Victoria</title>
<link rel="stylesheet" href="/src/output.css">
</head>

<body class="flex bg-gray-100">

@include('menu')

<!-- CONTENIDO -->
<main class="flex-1 p-8">

<h1 class="text-2xl font-bold mb-6">Listado de Proveedores</h1>

<div class="bg-white rounded-xl shadow-md overflow-hidden">

<div class="p-4 border-b flex justify-between items-center">

<h3 class="font-bold text-lg">Proveedores registrados</h3>

<a href="{{ route('formulario_proveedor') }}"
class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
Nuevo
</a>

</div>

<table class="w-full">

<thead class="bg-gray-50">
<tr>
<th class="text-left p-3 text-sm font-semibold">Nombre</th>
<th class="text-left p-3 text-sm font-semibold">Teléfono</th>
<th class="text-left p-3 text-sm font-semibold">Email</th>
<th class="text-center p-3 text-sm font-semibold">Estado</th>
<th class="text-center p-3 text-sm font-semibold">Acciones</th>
</tr>
</thead>

<tbody>

<tr class="border-b hover:bg-gray-50">

<td class="p-3 font-semibold"></td>
<td class="p-3 text-sm"></td>
<td class="p-3 text-sm"></td>

<td class="p-3 text-center">
<span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">
Activo
</span>
</td>

<td class="p-3 text-center">

<a href="#"
class="text-blue-600 mx-1">
Editar
</a>

<a href="#"
class="text-red-600 mx-1">
Cambiar
</a>

</td>

</tr>

<tr class="border-b hover:bg-gray-50">

<td class="p-3 font-semibold"></td>
<td class="p-3 text-sm"></td>
<td class="p-3 text-sm"></td>

<td class="p-3 text-center">
<span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">
Inactivo
</span>
</td>

<td class="p-3 text-center">

<a href="#"
class="text-blue-600 mx-1">
Editar
</a>

<a href="#"
class="text-red-600 mx-1">
Cambiar
</a>

</td>

</tr>

</tbody>

</table>

</div>

</main>

</body>
</html>