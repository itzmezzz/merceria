<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="flex min-h-screen items-center justify-center p-10 bg-gradient-to-br from-slate-900 to-slate-700">

<main class="flex-1 flex justify-center items-center">

<div class="bg-[#1e293b] p-10 rounded-xl shadow-2xl w-[500px] min-h-[500px] text-white">

    <h2 class="text-2xl font-semibold mb-10 text-center">
        Iniciar Sesión
    </h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div class="grid grid-cols-4 items-center gap-4">
            <label class="text-right text-slate-200">
                Email
            </label>

            <input type="email" name="email" required
            class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
        </div>

        <!-- Password -->
        <div class="grid grid-cols-4 items-center gap-4">
            <label class="text-right text-slate-200">
                Contraseña
            </label>

            <input type="password" name="password" required
            class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
        </div>

        

        <!-- Botones -->
        <div class="flex justify-center gap-6 pt-6">

            

            <button
            class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-lg font-semibold">
                Entrar
            </button>

        </div>

    </form>

</div>

</main>

</body>
</html>