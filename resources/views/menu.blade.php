<aside class="w-64 min-h-screen bg-[#1e2d42] text-white shadow-lg flex flex-col">

    <div class="p-6 text-xl font-bold border-b border-gray-600 flex items-center gap-3">
        <i class="fa-solid fa-scissors"></i>
        Mercería Victoria
    </div>

    <div class="p-4 border-b border-gray-600">
        <p class="text-sm text-gray-300">Bienvenido</p>
        <p class="font-semibold">{{ auth()->user()->name }}</p>
    </div>

    <nav class="mt-4 space-y-1 flex-1">

        <!-- TODOS -->
        <a href="{{ route('index') }}"
        class="flex items-center gap-3 px-6 py-3 
        {{ request()->routeIs('index') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
            <i class="fa-solid fa-house"></i>
            Inicio
        </a>

        <a href="{{ route('carrito') }}"
        class="flex items-center gap-3 px-6 py-3 
        {{ request()->routeIs('carrito') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
            <i class="fa-solid fa-cart-shopping"></i>
            Carrito
        </a>

        <a href="{{ route('lista_producto') }}"
        class="flex items-center gap-3 px-6 py-3 
        {{ request()->routeIs('lista_producto') || request()->routeIs('formulario_producto') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
            <i class="fa-solid fa-box"></i>
            Inventario
        </a>

        <!-- SOLO ADMIN -->
        @if(auth()->user()->rol === 'A')

        <a href="{{ route('categoria.mostrar') }}"
        class="flex items-center gap-3 px-6 py-3 
        {{ request()->routeIs('categoria.mostrar') || request()->routeIs('formulario_categoria') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
            <i class="fa-solid fa-tags"></i>
            Categorías
        </a>

        <a href="{{ route('lista_proveedor') }}"
        class="flex items-center gap-3 px-6 py-3 
        {{ request()->routeIs('lista_proveedor') || request()->routeIs('formulario_proveedor') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
            <i class="fa-solid fa-truck"></i>
            Proveedores
        </a>

        <a href="{{ route('usuario.lista') }}"
        class="flex items-center gap-3 px-6 py-3 hover:bg-gray-700">
            <i class="fa-solid fa-user-plus"></i>
            Usuarios
        </a>

        <a href="{{ route('caja.cortes') }}"
        class="flex items-center gap-3 px-6 py-3 hover:bg-gray-700">
            <i class="fa-solid fa-cash-register"></i>
            Cortes de Caja
        </a>

        @endif
    </nav>

    <form method="POST" action="{{ route('logout') }}" class="p-4 border-t border-gray-600">
        @csrf
        <button class="flex items-center gap-3 w-full text-left hover:bg-gray-700 px-3 py-2 rounded">
            <i class="fa-solid fa-right-from-bracket"></i>
            Cerrar sesión
        </button>
    </form>

</aside>