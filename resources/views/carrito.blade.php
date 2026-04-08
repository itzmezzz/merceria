<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Nueva Venta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">

</head>

<body class="bg-gradient-to-br from-slate-900 to-slate-700">

<div class="flex min-h-screen">

@include('menu')

<main class="flex-1 p-6">

<div class="flex gap-6 h-[calc(100vh-80px)]">

<!-- PRODUCTOS -->
<div class="flex-1 bg-slate-800 text-white rounded-lg shadow-sm flex flex-col overflow-hidden">

<!-- BUSCADOR + CATEGORÍAS -->
<form action="{{ route('carrito') }}" method="GET" class="p-4 flex gap-2 border-b bg-slate-700 border-slate-600">

    <div class="relative flex-1">
        <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
        <input type="text" name="buscar"
            value="{{ request('buscar') }}"
            placeholder="Buscar producto..."
            class="w-full bg-slate-600 border border-slate-500 text-white rounded-lg pl-10 pr-3 py-2">
    </div>

    <select name="categoria"
        class="bg-slate-600 border border-slate-500 text-white rounded-lg px-3 py-2">

        <option value="">Todas</option>

        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach

    </select>

    <button type="submit"
        class="!bg-blue-600 hover:!bg-blue-700 !text-white px-4 py-2 rounded-lg font-semibold">
        Buscar
    </button>

</form>

<!-- PRODUCTOS -->
<div class="flex-1 flex flex-wrap gap-6 p-6 overflow-y-auto">

@foreach($productos as $producto)

<div class="w-64 bg-slate-800 text-white border border-slate-700 rounded-lg shadow-md p-4 flex flex-col">

    <img src="{{ $producto->foto ? asset('storage/'.$producto->foto) : 'https://via.placeholder.com/300' }}"
        class="w-full h-32 object-cover rounded mb-2">

    <p class="font-bold">{{ $producto->nombre }}</p>
    <p class="text-blue-400">${{ $producto->precio_venta }}</p>

    @if($producto->stock > 0)

       <form class="form-agregar-carrito" onsubmit="return false;">
    @csrf
    <input type="hidden" name="producto_id" value="{{ $producto->id }}">

    <button type="button"
    onclick="console.log('CLICK'); agregarCarrito(this)"
    class="mt-2 bg-green-600 hover:bg-green-700 text-white w-full py-1 rounded">
    Agregar
</button>
</form>

    @else

        <button disabled
            class="mt-2 bg-red-600 text-white w-full py-1 rounded opacity-80 cursor-not-allowed">
            Sin stock
        </button>

    @endif

</div>

@endforeach

</div>

</div>

<!-- CARRITO -->
<div class="w-96 bg-slate-800 text-white border border-slate-600 rounded-lg shadow-sm flex flex-col overflow-hidden">

@php
    $caja = \App\Models\Caja::where('estatus', 'A')->first();
@endphp

<div class="p-3 border-b border-slate-600">

    @if($caja)
        <div class="bg-green-900 text-green-300 p-2 rounded mb-2">
            Caja abierta #{{ $caja->id }} (${{ $caja->monto_inicial }})
        </div>
    @else
        <div class="bg-red-900 text-red-300 p-2 rounded mb-2">
            No hay caja abierta
        </div>
    @endif

    <div class="flex gap-2">

        <form action="{{ route('caja.abrir') }}" method="POST" class="flex gap-2">
            @csrf

            <input type="number"
                   name="monto_inicial"
                   placeholder="Monto inicial"
                   class="border border-slate-500 bg-slate-600 text-white rounded px-3 py-2 w-26"
                   required>

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded">
                Abrir
            </button>
        </form>

        <form action="{{ route('caja.cerrar') }}" method="POST">
            @csrf
            <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white px-2 py-2 rounded">
                Cerrar
            </button>
        </form>

    </div>
</div>

<div class="bg-slate-900 text-white p-4 flex justify-between items-center">
    <h3 class="font-bold">Ticket</h3>
    <i class="fa-solid fa-receipt"></i>
</div>

<div id="carrito-lista" class="flex-1 p-4 text-gray-300 text-sm">

@forelse($carrito as $item)

<div class="flex justify-between items-center mb-3 border-b border-slate-600 pb-2">

    <div class="flex gap-2 items-center">

        <img src="{{ $item['foto'] ?? 'https://via.placeholder.com/50' }}"
             class="w-10 h-10 rounded object-cover">

        <div>
            <p class="text-sm font-semibold">
                {{ $item['nombre'] }} - ${{ $item['precio'] }}
            </p>
            <p class="text-xs text-gray-400">
                {{ $item['cantidad'] }} x ${{ $item['precio'] }}
            </p>
        </div>

    </div>

    <div class="flex items-center gap-2">
        <span class="font-semibold text-white">${{ $item['subtotal'] }}</span>

        <form action="{{ route('carrito.eliminar') }}" method="POST">
            @csrf
            <input type="hidden" name="producto_id" value="{{ $item['id'] }}">
            <button class="text-red-400 hover:text-red-600">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
    </div>

</div>

@empty
<p class="text-center text-gray-400">Carrito vacío</p>
@endforelse

</div>

<!-- TOTAL -->
<div class="p-4 bg-gray-700 border-t border-slate-600">

    <div class="flex justify-between text-lg font-semibold text-white mb-4">
        <span>Total</span>
        <span id="total-carrito" class="text-blue-400">${{ $total }}</span>
    </div>

    <form action="{{ route('ventas.cobrar') }}" method="POST">
        @csrf

        @if($caja)
            <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-bold flex items-center justify-center gap-2">
                <i class="fa-solid fa-cash-register"></i>
                COBRAR
            </button>
        @else
            <div class="bg-red-600 text-white border border-red-700 rounded-lg p-3 text-center font-semibold">
                Debes abrir una caja antes de cobrar
            </div>
        @endif

    </form>

</div>

</div>

</div>

</main>

</div>
<script>
function agregarCarrito(btn) {

    let form = btn.closest("form");
    let formData = new FormData(form);

    fetch("{{ route('carrito.agregar') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {

        console.log("DATA:", data);

        if (data.success) {

            let item = data.item;
            let contenedor = document.getElementById("carrito-lista");

            // quitar mensaje "Carrito vacío"
            if (contenedor.innerText.includes("Carrito vacío")) {
                contenedor.innerHTML = "";
            }

            // verificar si ya existe
            let existente = document.getElementById("item-" + item.id);

            if (existente) {

                existente.querySelector(".cantidad").innerText =
                    item.cantidad + " x $" + item.precio;

                existente.querySelector(".subtotal").innerText =
                    "$" + item.subtotal;

            } else {

                let html = `
                <div id="item-${item.id}" class="flex justify-between items-center mb-3 border-b border-slate-600 pb-2">

                    <div class="flex gap-2 items-center">

                        <img src="${item.foto}" class="w-10 h-10 rounded object-cover">

                        <div>
                            <p class="text-sm font-semibold">
                                ${item.nombre} - $${item.precio}
                            </p>

                            <p class="text-xs text-gray-400 cantidad">
                                ${item.cantidad} x $${item.precio}
                            </p>
                        </div>

                    </div>

                    <div class="flex items-center gap-2">
                        <span class="font-semibold text-white subtotal">
                            $${item.subtotal}
                        </span>

                        <form action="{{ route('carrito.eliminar') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="producto_id" value="${item.id}">

                            <button type="submit" class="text-red-400 hover:text-red-600">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>

                </div>
                `;

                contenedor.insertAdjacentHTML("beforeend", html);
            }

            // actualizar total
            let totalElemento = document.getElementById("total-carrito");
            let total = 0;

            document.querySelectorAll(".subtotal").forEach(el => {
                total += parseFloat(el.innerText.replace('$', '').trim());
            });

            totalElemento.innerText = "$" + total;
        }

    })
    .catch(err => {
        console.log(err);
        alert("Error al agregar producto");
    });
}
</script>
</body>
</html>