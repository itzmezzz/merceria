<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('src/output.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<title>Inventario</title>
</head>

<body class="flex bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

@include('menu')

<main class="flex-1 flex justify-center items-start p-10">

<!-- CONTENEDOR -->
<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-8 w-full max-w-7xl min-h-[450px] flex flex-col">

<!-- TITULO -->
<div class="flex justify-between items-center mb-8">

<h2 class="text-2xl font-bold">
<i class="fa-solid fa-box"></i> Inventario
</h2>

<a href="{{ route('formulario_producto') }}"
class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 inline-flex items-center gap-2">
<i class="fa-solid fa-plus"></i>
Nuevo producto
</a>

</div>

<!-- CARDS -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

  <!-- CARD -->
  <div class="bg-[#334155] rounded-xl shadow-md p-5 hover:shadow-xl transition">
    <h2 class="text-xl font-bold">Producto 1</h2>
    <p class="text-gray-400">Descripción del producto</p>

    <div class="mt-4 flex gap-2">
      <a href="#"
      class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-lg hover:bg-yellow-600 transition">
        <i class="fa-solid fa-pen text-sm"></i>
        Editar
      </a>

      <a href="#"
      class="flex items-center gap-2 bg-red-600 px-3 py-1.5 rounded-lg hover:bg-red-700 transition">
        <i class="fa-solid fa-trash text-sm"></i>
        Eliminar
      </a>
    </div>
  </div>

  <!-- CARD -->
  <div class="bg-[#334155] rounded-xl shadow-md p-5 hover:shadow-xl transition">
    <h2 class="text-xl font-bold">Producto 2</h2>
    <p class="text-gray-400">Otra descripción</p>

    <div class="mt-4 flex gap-2">
      <a href="#"
      class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-lg hover:bg-yellow-600 transition">
        <i class="fa-solid fa-pen text-sm"></i>
        Editar
      </a>

      <a href="#"
      class="flex items-center gap-2 bg-red-600 px-3 py-1.5 rounded-lg hover:bg-red-700 transition">
        <i class="fa-solid fa-trash text-sm"></i>
        Eliminar
      </a>
    </div>
  </div>

  <!-- CARD -->
  <div class="bg-[#334155] rounded-xl shadow-md p-5 hover:shadow-xl transition">
    <h2 class="text-xl font-bold">Producto 3</h2>
    <p class="text-gray-400">Información del producto</p>

    <div class="mt-4 flex gap-2">
      <a href="#"
      class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-lg hover:bg-yellow-600 transition">
        <i class="fa-solid fa-pen text-sm"></i>
        Editar
      </a>

      <a href="#"
      class="flex items-center gap-2 bg-red-600 px-3 py-1.5 rounded-lg hover:bg-red-700 transition">
        <i class="fa-solid fa-trash text-sm"></i>
        Eliminar
      </a>
    </div>
  </div>

</div>

</div>

</main>

</body>
</html>
