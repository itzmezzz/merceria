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
    <a href="{{ route('formulario_categoria') }}"
       class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Nueva
    </a>
</div>