<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nueva Categoría - Mercería Victoria</title>
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="flex bg-gray-100 min-h-screen">

<!-- SIDEBAR -->
@include('menu')

<!-- CONTENIDO -->
<main class="flex-1 p-10">

<h1 class="text-2xl font-bold mb-6">Nueva Categoría</h1>

<div class="bg-white max-w-3xl rounded-xl shadow-md p-8">

<form action="{{ route('categoria.guardar') }}" method="POST">
@csrf
<!-- Nombre -->
<div class="mb-6">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nombre
</label>

<input type="text"
name="nombre"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500"
required>
</div>

<!-- Descripción -->
<div class="mb-8">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Descripción
</label>

<textarea
name="descripcion"
rows="3"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</textarea>

</div>

<!-- BOTONES -->
<div class="flex justify-end gap-4">

<a href="{{ route('categoria.mostrar')}}"
class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition">
Cancelar
</a>


<button type="submit"
class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition shadow">
Guardar
</button>

</div>

</form>

</div>

</main>

</body>
</html>