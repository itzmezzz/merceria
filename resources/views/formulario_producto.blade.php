<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Producto - Mercería Victoria</title>
  <link rel="stylesheet" href="/src/output.css">
</head>

<body class="flex bg-gray-100 min-h-screen">



<!-- CONTENIDO -->
<main class="flex-1 p-10">

<h1 class="text-2xl font-bold mb-6">Nuevo Producto</h1>

<div class="bg-white max-w-5xl rounded-xl shadow-md p-8">

<form action="#" method="POST">

    <!-- Código y Nombre -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Código</label>
<input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Nombre</label>
<input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

</div>

<!-- Descripción -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-2">Descripción</label>

<textarea rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500"></textarea>

</div>

<!-- Categoría y proveedor -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Categoría</label>

<select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
<option>Seleccionar...</option>
</select>
</div>

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Proveedor</label>

<select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
<option>Seleccionar...</option>
</select>
</div>

</div>

<!-- Precios y stock -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Precio compra</label>
<input type="number" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Precio venta</label>
<input type="number" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Stock inicial</label>
<input type="number" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

</div>

<!-- Stock mínimo -->
<div class="mb-8 w-1/3">

<label class="block text-sm font-semibold text-gray-700 mb-2">Stock mínimo</label>

<input type="number" value="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">

</div>

<!-- BOTONES -->
<div class="flex justify-end gap-4">

<a href="{{ route('inventario') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition">
Cancelar
</a>

<button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition shadow">
Guardar
</button>

</div>

</form>

</div>

</main>

</body>
</html>