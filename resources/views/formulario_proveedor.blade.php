<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<body class="bg-gray-100">
    

<div class="flex justify-center py-10">

<div class="bg-white w-full max-w-4xl rounded-xl shadow-md p-8">

<h2 class="text-2xl font-bold mb-6">Nuevo Proveedor</h2>

<form action="#" method="POST">

<!-- Nombre empresa -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nombre empresa
</label>

<input type="text"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<!-- Nombre contacto -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nombre contacto
</label>

<input type="text"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<!-- Teléfono y Email -->
<div class="grid grid-cols-2 gap-6 mb-5">

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Teléfono</label>
<input type="tel"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
<input type="email"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</div>

</div>

<!-- Dirección -->
<div class="mb-6">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Dirección
</label>

<textarea rows="3"
class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-500">
</textarea>
</div>

<!-- Botones -->
<div class="flex justify-end gap-4">

<a href="/proveedores"
class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400">
Cancelar
</a>

<button
class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
Guardar
</button>

</div>

</form>

</div>
</div>

</body>