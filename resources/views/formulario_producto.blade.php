<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nuevo Producto</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>

<body class="flex min-h-screen bg-gradient-to-br from-slate-900 to-slate-700">

@include('menu')

<main class="flex-1 flex justify-center items-center">


<div class="bg-[#1e293b] p-10 rounded-xl shadow-2xl w-[900px] text-white">

<h2 class="text-white text-2xl font-semibold mb-10 text-center">
Nuevo Producto
</h2>

<form class="space-y-6 text-white" action="{{ route('producto.guardar')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Código</label>
<input type="text"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Nombre</label>
<input type="text" name="nombre"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Descripción</label>
<textarea rows="3" name="descripcion"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500"></textarea>
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Precio compra</label>
<input type="number" name="precio_compra"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Precio venta</label>
<input type="number" name="precio_venta"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Stock</label>
<input type="number" name="stock"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Stock mínimo</label>
<input type="number" name="stock_minimo"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<!-- Para Categorias -->
<div class="grid grid-cols-4 items-center gap-4">
    <label class="text-right text-slate-200">Categoria</label>
    <select name="categoria_id" 
        class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
</div>

<!-- Para Proveedores -->
<div class="grid grid-cols-4 items-center gap-4">
    <label class="text-right text-slate-200">Proveedor</label>
    <select name="proveedor_id" 
        class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="grid grid-cols-4 items-center gap-4">
<label class="text-right text-slate-200">Foto</label>
<input type="file" name="foto"
class="col-span-3 px-4 py-2 rounded-lg bg-slate-700 border border-slate-600 focus:outline-none focus:border-green-500">
</div>

<div class="flex justify-center gap-6 pt-6">

<button class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded-lg font-semibold">
Guardar producto
</button>

<button class="bg-red-600 hover:bg-red-700 px-6 py-2 rounded-lg">
Cancelar
</button>

</div>

</form>

</div>

</main>

</body>
</html>