<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proveedores - Mercería Victoria</title>

<link rel="stylesheet" href="{{ asset('src/output.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="flex bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

@include('menu')

<main class="flex-1 flex justify-center items-start p-10">

<!-- CONTENEDOR -->
<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-7 w-full max-w-7xl min-h-[400px] flex flex-col">

<!-- TITULO -->
<div class="flex justify-between items-center mb-8">

<h2 class="text-2xl font-bold">
<i class="fa-solid fa-truck"></i> Proveedores
</h2>

<a href="{{ route('formulario_proveedor') }}"
class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 inline-flex items-center gap-2">
<i class="fa-solid fa-plus"></i>
Nuevo proveedor
</a>

</div>

<!-- TABLA -->
<div class="overflow-x-auto flex-1">

<table class="w-full text-left">

<thead class="border-b border-gray-600 text-gray-300">
<tr>
<th class="py-4">Nombre</th>
<th class="py-4">Teléfono</th>
<th class="py-4">Email</th>
<th class="py-4 text-center">Estado</th>
<th class="py-4 text-center">Acciones</th>
</tr>
</thead>

<tbody class="text-gray-200">

<!-- FILA -->
<tr class="border-b border-gray-700 hover:bg-[#334155] transition">

<td class="py-4 font-semibold"></td>
<td class="py-4"></td>
<td class="py-4"></td>

<td class="py-4 text-center">
<span class="bg-green-500/20 text-green-400 px-2 py-1 rounded text-sm">
Activo
</span>
</td>

<td class="py-4 text-center">
<div class="flex justify-center gap-2">

<a href="#"
class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-lg hover:bg-yellow-600 transition">
<i class="fa-solid fa-pen text-sm"></i>
Editar
</a>

<a href="#"
class="flex items-center gap-2 bg-red-600 px-3 py-1.5 rounded-lg hover:bg-red-700 transition">
<i class="fa-solid fa-trash text-sm"></i>
Cambiar
</a>

</div>
</td>

</tr>

<!-- FILA -->


</tbody>

</table>

</div>

</div>

</main>

</body>
</html>
