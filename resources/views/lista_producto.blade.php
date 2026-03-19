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

<main class="flex-1 flex justify-center items-start p-6">

<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-6 w-full max-w-7xl min-h-[450px] flex flex-col">

<!-- TITULO -->
<div class="flex justify-between items-center mb-6">

<h2 class="text-xl font-bold">
<i class="fa-solid fa-box"></i> Inventario
</h2>

<a href="{{ route('producto.nuevo') }}"
class="bg-blue-600 px-3 py-2 text-sm rounded hover:bg-blue-700 inline-flex items-center gap-2">
<i class="fa-solid fa-plus"></i>
Nuevo producto
</a>

</div>

<!-- CARDS -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 items-stretch">

@forelse($productos as $producto)

<div class="bg-[#334155] rounded-xl shadow-md p-3 hover:shadow-2xl hover:-translate-y-1 transition duration-300 h-full flex flex-col">

    <!-- CONTENIDO FLEX -->
    <div class="flex-1">

        <!-- IMAGEN -->
        <div class="overflow-hidden rounded-lg mb-2">
            <img src="{{ $producto->foto ? asset('storage/'.$producto->foto) : 'https://via.placeholder.com/300' }}"
                class="w-full h-28 object-cover transition duration-300 hover:scale-110">
        </div>

        <!-- NOMBRE -->
        <h2 class="text-sm font-bold">
            {{ $producto->nombre }}
        </h2>

        <!-- DESCRIPCION -->
        <p class="text-xs text-gray-400 line-clamp-2">
            {{ $producto->descripcion }}
        </p>

        <!-- PRECIO -->
        <p class="text-green-400 font-bold text-sm mt-1">
            ${{ $producto->precio_venta }}
        </p>

        <p class="text-gray-400 text-[10px] line-through">
            ${{ $producto->precio_compra }}
        </p>

        <!-- STOCK -->
        <p class="text-xs mt-1">
            Stock: 
            <span class="{{ $producto->stock <= $producto->stock_minimo ? 'text-red-400' : 'text-blue-400' }}">
                {{ $producto->stock }}
            </span>
        </p>

        <!-- INFO EXTRA -->
        <p class="text-[10px] text-gray-400 mt-1">
            {{ $producto->categoria->nombre ?? 'Sin categoría' }}
        </p>

        <p class="text-[10px] text-gray-400">
            {{ $producto->proveedor->nombre ?? 'Sin proveedor' }}
        </p>

        <!-- ESTADO -->
        <span class="inline-block mt-1 px-2 py-0.5 rounded-full text-[10px] font-semibold 
        {{ $producto->estatus ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
            {{ $producto->estatus ? 'Activo' : 'Inactivo' }}
        </span>

    </div>

    <!-- BOTONES ABAJO -->
    <div class="mt-2 flex gap-2">

        <a href="{{ route('editar_producto', $producto->id) }}"
        class="text-[10px] flex items-center gap-1 bg-yellow-500 text-black px-2 py-1 rounded hover:bg-yellow-600 transition">
            <i class="fa-solid fa-pen text-[10px]"></i>
            Editar
        </a>

        <form action="{{ route('eliminar_producto', $producto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button
            class="text-[10px] flex items-center gap-1 bg-red-600 px-2 py-1 rounded hover:bg-red-700 transition">
                <i class="fa-solid fa-trash text-[10px]"></i>
                Eliminar
            </button>
        </form>

    </div>

</div>

@empty

<p class="text-gray-400">No hay productos registrados</p>

@endforelse

</div>
  
</div>

</main>

</body>
</html>