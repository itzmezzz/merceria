<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cortes de Caja</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

<div class="flex min-h-screen">

    @include('menu')

    <!-- CONTENIDO -->
    <main class="flex-1 p-6 flex justify-center">

        <!-- CONTENEDOR CENTRADO -->
        <div class="w-full max-w-7xl">

            <!-- HEADER CON FILTRO -->
            <div class="flex flex-wrap justify-between items-center gap-4 mb-6 text-white">

                <h1 class="text-2xl font-bold">Cortes de Caja</h1>

                <form method="GET" class="flex flex-wrap gap-2 items-center">

                    <input type="date" name="fecha_inicio"
                        value="{{ request('fecha_inicio') }}"
                        class="bg-slate-700 border border-slate-600 text-white px-3 py-2 rounded">

                    <input type="date" name="fecha_fin"
                        value="{{ request('fecha_fin') }}"
                        class="bg-slate-700 border border-slate-600 text-white px-3 py-2 rounded">

                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Buscar fecha
                    </button>

                    <a href="{{ route('caja.cortes') }}"
                       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 flex items-center gap-2">
                        <i class="fa-solid fa-rotate-left"></i>
                        Limpiar
                    </a>

                </form>

            </div>

            <!-- TABLA -->
            <div class="bg-[#1e293b] shadow-xl rounded-xl overflow-hidden text-white">

                <table class="w-full">

                    <thead class="bg-[#334155] text-white">
                        <tr>
                            <th class="p-3 text-left">Apertura</th>
                            <th class="p-3 text-left">Cierre</th>
                            <th class="p-3 text-left">Monto</th>
                            <th class="p-3 text-left">Estado</th>
                            <th class="p-3 text-left">Acción</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($cajas as $caja)
                        <tr class="border-b border-slate-700 hover:bg-slate-700/40 transition">

                          <td class="p-3">
    {{ \Carbon\Carbon::parse($caja->fecha_apertura)->format('d/m/Y h:i A') }}
</td>

<td class="p-3">
    {{ $caja->fecha_cierre 
        ? \Carbon\Carbon::parse($caja->fecha_cierre)->format('d/m/Y h:i A') 
        : '---' }}
</td>

                            <td class="p-3">
                                ${{ $caja->monto_inicial }}
                            </td>

                            <td class="p-3">
                                <span class="{{ $caja->estatus == 'A' ? 'text-green-400' : 'text-red-400' }}">
                                    {{ $caja->estatus == 'A' ? 'Abierta' : 'Cerrada' }}
                                </span>
                            </td>

                            <td class="p-3">
                                <a href="{{ route('caja.detalle', $caja->id) }}"
                                   class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                                    Ver
                                </a>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>

</body>
</html>