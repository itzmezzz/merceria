<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Categorías</title>
    <link rel="stylesheet" href="{{ asset('src/output.css') }}">
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

@include('menu')

<main class="flex-1 p-6">

<div class="bg-white rounded shadow">

<div class="p-4 border-b flex justify-between items-center">
    <h3 class="font-bold text-lg">Listado de categorías</h3>
    <a href="" 
       class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Nueva
    </a>
</div>


<main class="flex-1 p-8">

<h1 class="text-2xl font-bold mb-6">Lista de Categorias</h1>

<div class="bg-white rounded-xl shadow-md overflow-hidden">

<div class="p-4 border-b flex justify-between items-center">

<h3 class="font-bold text-lg"></h3>

<table class="w-full">

<thead class="bg-gray-50">
<tr>
<th class="text-left p-3 text-sm font-semibold">Nombre</th>
<th class="text-left p-3 text-sm font-semibold">Teléfono</th>
<th class="text-left p-3 text-sm font-semibold">Email</th>
<th class="text-center p-3 text-sm font-semibold">Estado</th>
<th class="text-center p-3 text-sm font-semibold">Acciones</th>
</tr>
</thead>

<tbody>



<td class="p-3 font-semibold"></td>
<td class="p-3 text-sm"></td>
<td class="p-3 text-sm"></td>
@if ($categoria->estatus == 'A')
    

<td class="p-3 text-center">
<span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">

    
</span>
</td>

@else

<td class="p-3 text-center">
<span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">

</span>
</td>

@endif 

<td class="p-3 text-center">

<a href="#"
class="text-blue-600 mx-1">
Editar
</a>
</tbody>
</table>
