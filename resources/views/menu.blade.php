<aside class="w-64 min-h-screen bg-[#1e2d42] text-white shadow-lg">

<div class="p-6 text-xl font-bold border-b border-gray-600 flex items-center gap-3">
<i class="fa-solid fa-scissors"></i>
Mercería Victoria
</div>

<nav class="mt-4 space-y-1">

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

</nav>
</aside>