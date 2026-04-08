<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">

<title>Editar Usuario</title>
</head>

<body class="flex bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

@include('menu')

<main class="flex-1 flex justify-center items-center p-6">

<div class="bg-[#1e293b] text-white rounded-2xl shadow-xl p-8 w-full max-w-md">

<h2 class="text-xl font-bold mb-6 text-center">
Editar Usuario
</h2>

<form action="{{ route('usuario.actualizar', $usuario->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <!-- NOMBRE -->
    <input type="text" name="name" value="{{ $usuario->name }}"
    class="w-full p-2 rounded bg-[#334155]" placeholder="Nombre">

    <!-- EMAIL -->
    <input type="email" name="email" value="{{ $usuario->email }}"
    class="w-full p-2 rounded bg-[#334155]" placeholder="Email">

    <!-- PASSWORD -->
    <input type="text" name="password" value="{{ $usuario->password }}"
    class="w-full p-2 rounded bg-[#334155]" placeholder="Password">

    <!-- ROL -->
    <select name="rol" class="w-full p-2 rounded bg-[#334155]">
        <option value="A" {{ $usuario->rol == 'A' ? 'selected' : '' }}>Admin</option>
        <option value="V" {{ $usuario->rol == 'V' ? 'selected' : '' }}>Vendedor</option>
    </select>

    <!-- BOTÓN -->
    <button
    class="w-full bg-blue-600 py-2 rounded hover:bg-blue-700">
        Guardar cambios
    </button>

</form>

</div>

</main>

</body>
</html>