<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


// HOME

Route::get('/', function () {
    return view('welcome');
});



// CATEGORIAS


// LISTA
Route::get('/categoria/lista', [CategoriaController::class, 'mostrar'])
    ->name('categoria.mostrar');

// FORMULARIO
Route::get('/categoria/form', [CategoriaController::class, 'formulario'])
    ->name('formulario_categoria');

// GUARDAR
Route::post('/categoria/guardar', [CategoriaController::class, 'guardar'])
    ->name('categoria.guardar');

// EDITAR
Route::get('/categoria/{id}/editar', [CategoriaController::class, 'editar'])
    ->name('editar_categoria');

// ACTUALIZAR
Route::put('/categoria/{id}', [CategoriaController::class, 'actualizar'])
    ->name('actualizar_categoria');

// ELIMINAR
Route::delete('/categoria/{id}', [CategoriaController::class, 'eliminar'])
    ->name('eliminar_categoria');

Route::get('/categoria/nuevo',[CategoriaController::class, 'nuevo'])->name('categoria.nuevo');


// PRODUCTOS

Route::get('/producto/nuevo',[ProductoController::class, 'nuevo'])->name('producto.nuevo');

// LISTA
Route::get('/lista_producto', [ProductoController::class, 'index'])
    ->name('lista_producto');

Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');

// FORMULARIO
Route::get('/producto/formu', [ProductoController::class, 'formulario'])
    ->name('formulario_producto');

// GUARDAR
Route::post('/producto/guardar', [ProductoController::class, 'guardar'])
    ->name('producto.guardar');

// EDITAR
Route::get('/producto/{id}/editar', [ProductoController::class, 'editar'])
    ->name('editar_producto');

// ACTUALIZAR
Route::put('/producto/{id}', [ProductoController::class, 'actualizar'])
    ->name('actualizar_producto');

// ELIMINAR
Route::delete('/producto/{id}', [ProductoController::class, 'eliminar'])
    ->name('eliminar_producto');


// PROVEEDORES

// LISTA
Route::get('/proveedores', [ProveedorController::class, 'mostrar'])
    ->name('lista_proveedor');

// FORMULARIO
Route::get('/formulario_proveedor', [ProveedorController::class, 'nuevo'])
    ->name('formulario_proveedor');

// GUARDAR
Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar'])
    ->name('proveedor.guardar');

// EDITAR
Route::get('/proveedor/{id}/editar', [ProveedorController::class, 'editar'])
    ->name('editar_proveedor');

// ACTUALIZAR
Route::put('/proveedor/{id}', [ProveedorController::class, 'actualizar'])
    ->name('actualizar_proveedor');

// ELIMINAR
Route::delete('/proveedor/{id}', [ProveedorController::class, 'eliminar'])
    ->name('eliminar_proveedor');



Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');