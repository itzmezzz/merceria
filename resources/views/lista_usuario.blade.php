<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('src/output.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<title>Usuarios</title>
</head>

<body class="flex bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

@include('menu')

<main class="flex-1 flex justify-center items-start p-6">

<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-6 w-full max-w-7xl min-h-[450px] flex flex-col">

<!-- TITULO -->
<div class="flex justify-between items-center mb-6">

<h2 class="text-xl font-bold">
<i class="fa-solid fa-users"></i> Usuarios
</h2>

<a href="{{ route('usuario.nuevo') }}"
class="bg-blue-600 px-3 py-2 text-sm rounded hover:bg-blue-700 inline-flex items-center gap-2">
<i class="fa-solid fa-user-plus"></i>
Nuevo usuario
</a>

</div>

<!-- CARDS -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 items-stretch">

@forelse($usuarios as $usuario)

<div class="bg-[#334155] rounded-xl shadow-md p-3 hover:shadow-2xl hover:-translate-y-1 transition duration-300 h-full flex flex-col">

    <!-- CONTENIDO -->
    <div class="flex-1">

        <!-- ICONO -->
        <div class="flex justify-center mb-2">
            <i class="fa-solid fa-user text-4xl text-gray-300"></i>
        </div>

        <!-- NOMBRE -->
        <h2 class="text-sm font-bold text-center">
            {{ $usuario->name }}
        </h2>

        <!-- EMAIL -->
        <p class="text-[14px] text-gray-400 text-center">
            {{ $usuario->email }}
        </p>

        <!-- PASSWORD -->
        <p class="text-[14px] text-gray-500 text-center mt-1">
            {{ $usuario->password }}
        </p>

        <!-- ESTATUS -->
        <div class="text-center mt-2">
            <span class="inline-block px-3 py-1 rounded-full text-[12px] font-semibold 
            {{ $usuario->estatus === 'A' ? 'bg-green-500/20 text-green-400' : 'bg-red-500/20 text-red-400' }}">
                {{ $usuario->estatus === 'A' ? 'Activo' : 'Inactivo' }}
            </span>
        </div>

    </div>

    <!-- BOTONES -->
    <div class="mt-2 flex gap-2">

        <!-- EDITAR -->
        <a href="{{ route('usuario.editar', $usuario->id) }}"
        class="text-[12px] flex items-center gap-1 bg-yellow-500 text-black px-3 py-2 rounded hover:bg-yellow-600 transition">
            <i class="fa-solid fa-pen text-[12px]"></i>
            Editar
        </a>

        <!-- DESACTIVAR -->
        <form action="{{ route('usuario.desactivar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
       <button
         class="text-[12px] flex items-center gap-1 
         {{ $usuario->estatus === 'A' ? 'bg-red-600 hover:bg-red-700' : 'bg-green-600 hover:bg-green-700' }} px-3 py-2 rounded transition">

    <i class="fa-solid {{ $usuario->estatus === 'A' ? 'fa-user-slash' : 'fa-user-check' }} text-[12px]"></i>

    {{ $usuario->estatus === 'A' ? 'Desactivar' : 'Activar' }}

</button>
        </form>

    </div>

</div>

@empty
<p class="text-gray-400">No hay usuarios registrados</p>
@endforelse

</div>
  
</div>

</main>

</body>
</html>