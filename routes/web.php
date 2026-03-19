<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});
//categoria
Route::get('/categoria/form', function () {
    return view('formulario_categoria');
});
Route::post('/categoria/guardar',[CategoriaController::class, 'guardar'])->name('categoria.guardar');
Route::get('/categoria/lista',[CategoriaController::class, 'mostrar'])->name('categoria.mostrar');
Route::get('/formulario_categoria', [CategoriaController::class, 'formulario'])->name('formulario_categoria');

//inicio
Route::get('/index', function () {
    return view('index');
})->name('index');

//inventario
route::get('/lista_producto', function () {
    return view('lista_producto');
})->name('lista_producto');

Route::get('/producto/form', [ProductoController::class, 'formulario'])
->name('formulario_producto');


//proveedores
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('lista_proveedor');

Route::get('/formulario_proveedor', [ProveedorController::class, 'create'])->name('formulario_proveedor');


//carrito de compras
Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');
