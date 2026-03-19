<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nueva Categoría - Mercería Victoria</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="flex min-h-screen bg-gradient-to-br from-slate-900 to-slate-700">

@include('menu')

<main class="flex-1 flex justify-center items-center px-4">

<div class="bg-[#1e293b] p-10 rounded-xl shadow-2xl w-full max-w-4xl text-white">


<h2 class="text-2xl font-semibold mb-8 text-center">
Nueva Categoría
</h2>

<form action="{{ route('categoria.guardar') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
@csrf

<!-- Nombre -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Nombre
</label>

<input type="text"
name="nombre"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500"
required>
</div>

<!-- Descripción -->
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">
Descripción
</label>

<textarea
name="descripcion"
rows="3"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</textarea>
</div>

{{-- <div class="grid grid-cols-4 items-center gap-4"> --}}
{{-- <label class="text-right text-slate-200"> --}}
{{-- Foto --}}
{{-- </label> --}}

{{-- <input type="file" --}}
{{-- name="foto" --}}
{{-- class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500" --}}
{{-- required> --}}
{{-- </div> --}}

<!-- BOTONES -->
<div class="flex justify-center gap-6 pt-4">

<a href="{{ route('categoria.mostrar')}}"
class="bg-red-600 hover:bg-red-700 px-6 py-2 rounded-lg transition">
Cancelar
</a>

<button type="submit"
class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded-lg font-semibold transition">
Guardar
</button>

</div>

</form>

</div>

</main>

</body>
</html>
