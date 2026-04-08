<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nuevo Usuario</title>
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="flex min-h-screen bg-gradient-to-br from-slate-900 to-slate-700">

@include('menu')

<main class="flex-1 flex justify-center items-center">

<div class="bg-[#1e293b] p-10 rounded-xl shadow-2xl w-[600px] text-white">

<h2 class="text-2xl font-semibold mb-8 text-center">
Nuevo Usuario
</h2>

<form action="{{ route('usuario.guardar') }}" method="POST" class="space-y-6">
@csrf

<input type="text" name="name" placeholder="Nombre"
class="w-full px-4 py-2 rounded bg-slate-700">

<input type="email" name="email" placeholder="Email"
class="w-full px-4 py-2 rounded bg-slate-700">

<input type="password" name="password" placeholder="Contraseña"
class="w-full px-4 py-2 rounded bg-slate-700">

<select name="rol" class="w-full px-4 py-2 rounded bg-slate-700">
    <option value="A">Administrador</option>
    <option value="V">Vendedor</option>
</select>

<div class="flex justify-center gap-4">
    <button class="bg-green-600 px-6 py-2 rounded">
        Guardar
    </button>
</div>

</form>

</div>

</main>

</body>
</html>