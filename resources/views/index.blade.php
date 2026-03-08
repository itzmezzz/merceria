<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercería Victoria</title>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="flex bg-gray-100">

    <!-- MENÚ LATERAL -->
    <aside class="w-64 min-h-screen bg-[#1e2d42] text-white">

        <!-- Título -->
        <div class="p-6 text-2xl font-bold border-b border-gray-600">
            Mercería Victoria
        </div>

        <!-- Navegación -->
        <nav class="mt-4">

            <a href="{{ route('index') }}"
               class="block px-6 py-3 bg-gray-600">
                Inicio
            </a>

            <a href="{{ route('carrito') }}"
               class="block px-6 py-3 hover:bg-gray-700 transition">
                Nueva Venta
            </a>

            <a href="{{ route('inventario') }}"
               class="block px-6 py-3 hover:bg-gray-700 transition">
                Inventario
            </a>

            <a href="{{ route('lista_categorias') }}"
               class="block px-6 py-3 hover:bg-gray-700 transition">
                Categorías
            </a>

            <a href="{{ route('lista_proveedor') }}"
               class="block px-6 py-3 hover:bg-gray-700 transition">
                Proveedores
            </a>

        </nav>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 p-8">

        <h1 class="text-2xl font-bold mb-6">Panel de Inicio</h1>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

            <div class="bg-white p-6 rounded shadow">
                <p class="text-gray-500 text-sm">Productos activos</p>
                <p class="text-3xl font-bold"></p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <p class="text-gray-500 text-sm">Stock bajo</p>
                <p class="text-3xl font-bold"></p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <p class="text-gray-500 text-sm">Ventas hoy</p>
                <p class="text-3xl font-bold">
                    
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <p class="text-gray-500 text-sm">Categorías</p>
                <p class="text-3xl font-bold"></p>
            </div>

        </div>

    </main>

</body>
</html>