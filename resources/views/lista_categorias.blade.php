<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías</title>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="flex bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

@include('menu')

<main class="flex-1 flex justify-center items-start p-10">

<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-7 w-full max-w-7xl min-h-[400px] flex flex-col">

<!-- HEADER -->
<div class="flex justify-between items-center mb-8">

<h2 class="text-2xl font-bold">
<i class="fa-solid fa-tags"></i> Categorías
</h2>

<a href="{{ route('categoria.nuevo') }}"
class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 inline-flex items-center gap-2">
<i class="fa-solid fa-plus"></i>
Nueva
</a>

</div>

<!-- TABLA -->
<div class="overflow-x-auto flex-1">

<table class="w-full text-left">

<thead class="border-b border-gray-600 text-gray-300">
<tr>
<th class="py-4">Nombre</th>
<th class="py-4">Descripción</th>
<th class="py-4 text-center">Estatus</th>
<th class="py-4 text-center">Acciones</th>
</tr>
</thead>

<tbody class="text-gray-200">

@foreach ($categorias as $categoria)
<tr class="border-b border-gray-700 hover:bg-[#334155] transition">

<td class="py-4 font-semibold">{{ $categoria->nombre }}</td>
<td class="py-4">{{ $categoria->descripcion }}</td>

<td class="py-4 text-center">
  @if($categoria->estatus === 'A')
    <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded text-sm">
      Activo
    </span>
  @else
    <span class="bg-red-500/20 text-red-400 px-2 py-1 rounded text-sm">
      Inactivo
    </span>
  @endif
</td>

<td class="py-4 text-center">
<div class="flex justify-center gap-2">

<a href="{{ route('editar_categoria', $categoria->id) }}"
class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-lg hover:bg-yellow-600 transition">
<i class="fa-solid fa-pen text-sm"></i>
Editar
</a>

<form action="{{ route('eliminar_categoria', $categoria->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button 
    class="flex items-center gap-2 px-3 py-1.5 rounded-lg transition
    {{ $categoria->estatus === 'A' ? 'bg-red-600 hover:bg-red-700' : 'bg-green-600 hover:bg-green-700' }}"
    onclick="return confirm('{{ $categoria->estatus === 'A' ? '¿Deseas desactivar esta categoría?' : '¿Deseas activar esta categoría?' }}')">

    <!-- ICONO DINÁMICO -->
    <i class="fa-solid {{ $categoria->estatus === 'A' ? 'fa-trash' : 'fa-check' }} text-sm"></i>

    {{ $categoria->estatus === 'A' ? 'Desactivar' : 'Activar' }}

    </button>

</form>

</div>
</td>

</tr>
@endforeach

</tbody>

</table>

</div>

</div>

</main>

</body>
</html>
