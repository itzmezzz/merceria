<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Proveedor</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="flex min-h-screen bg-gradient-to-br from-slate-900 to-slate-700">

@include('menu')

<main class="flex-1 flex justify-center items-center">


<div class="bg-[#1e293b] p-10 rounded-xl shadow-2xl w-[900px] text-white">

<h2 class="text-2xl font-semibold mb-10 text-center">
Nuevo Proveedor
</h2>

<form action="{{ route('proveedor.guardar') }}" method="POST" class="space-y-6">
@csrf
<!-- Nombre empresa -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Nombre empresa
</label>

<input type="text"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<!-- Nombre contacto -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Nombre contacto
</label>

<input type="text" name="nombre"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<!-- Teléfono -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Teléfono
</label>

<input type="tel" name="telefono"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<!-- Email -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Email
</label>

<input type="email" name="email"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<!-- Dirección -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Dirección
</label>

<textarea rows="3" name="direccion"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500"></textarea>
</div>

<!-- Botones -->
<div class="flex justify-center gap-6 pt-6">

<a href="/proveedores"
class="bg-red-600 hover:bg-red-700 px-6 py-2 rounded-lg">
Cancelar
</a>

<button
class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded-lg font-semibold">
Guardar
</button>

</div>

</form>

</div>

</main>

</body>
</html>
