<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalle Caja</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="bg-gradient-to-br from-[#1e2d42] to-[#0f172a] min-h-screen">

<div class="flex min-h-screen">

    @include('menu')

    <main class="flex-1 p-6">

        <h1 class="text-2xl font-bold text-white mb-6">
            Caja #{{ $caja->id }}
        </h1>

        <div class="bg-[#1e293b] text-white p-6 rounded-xl shadow-xl mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-gray-400 text-sm mb-1">Apertura</p>
                    <div class="flex flex-col">
                        <span class="font-semibold">
                            {{ \Carbon\Carbon::parse($caja->fecha_apertura)->format('d/m/Y') }}
                        </span>
                        <span class="text-sm text-slate-400">
                            {{ \Carbon\Carbon::parse($caja->fecha_apertura)->format('h:i A') }}
                        </span>
                    </div>
                </div>

                <div>
                    <p class="text-gray-400 text-sm mb-1">Cierre</p>

                    @if($caja->fecha_cierre)
                        <div class="flex flex-col">
                            <span class="font-semibold">
                                {{ \Carbon\Carbon::parse($caja->fecha_cierre)->format('d/m/Y') }}
                            </span>
                            <span class="text-sm text-slate-400">
                                {{ \Carbon\Carbon::parse($caja->fecha_cierre)->format('h:i A') }}
                            </span>
                        </div>
                    @else
                        <p class="font-semibold">---</p>
                    @endif
                </div>

                <div>
                    <p class="text-gray-400 text-sm mb-1">Monto inicial</p>
                    <p class="font-semibold text-green-400">
                        ${{ number_format($caja->monto_inicial, 2) }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-sm mb-1">Total ventas</p>
                    <p class="font-semibold text-blue-400">
                        ${{ number_format($totalVentas, 2) }}
                    </p>
                </div>

            </div>
        </div>

        <h2 class="text-white text-xl font-bold mb-4">
            Ventas
        </h2>

        <div class="bg-[#1e293b] rounded-xl shadow-xl overflow-hidden">

            <table class="w-full text-white">

                <thead class="bg-[#334155]">
                    <tr>
                        <th class="p-3 text-left">Fecha</th>
                        <th class="p-3 text-left">Total</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($ventas as $venta)
                    <tr class="border-b border-slate-700 hover:bg-slate-700/40 transition">

                        <td class="p-3">
                            <div class="flex flex-col">
                                <span class="font-medium">
                                    {{ \Carbon\Carbon::parse($venta->fecha)->format('d/m/Y') }}
                                </span>
                                <span class="text-sm text-slate-400">
                                    {{ \Carbon\Carbon::parse($venta->fecha)->format('h:i A') }}
                                </span>
                            </div>
                        </td>

                        <td class="p-3 text-green-400">
                            ${{ number_format($venta->total, 2) }}
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

        <div class="mt-6">
            <a href="{{ route('caja.cortes') }}"
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg inline-block">
                Volver
            </a>
        </div>

    </main>

</div>

</body>
</html>