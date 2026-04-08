<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CajaController;

// LOGIN
Route::get('/login', function () {
    if (auth()->check()) {
        return redirect('/index');
    }

    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// TODAS LAS RUTAS PROTEGIDAS
Route::middleware(['auth'])->group(function () {

    // HOME
    Route::post('/caja/abrir', [CajaController::class, 'abrir'])->name('caja.abrir');
    Route::post('/caja/cerrar', [CajaController::class, 'cerrar'])->name('caja.cerrar');
    Route::get('/cortes', [CajaController::class, 'cortes'])->name('caja.cortes');
    Route::get('/cortes/{id}', [CajaController::class, 'detalle'])->name('caja.detalle');

    Route::get('/', function () {
        return view('welcome');
    });

    // INDEX
    Route::get('/inicio', [IndexController::class, 'mostrar'])->name('inicio');

    Route::get('/index', function () {
        return view('index');
    })->name('index');

    // CATEGORIAS
    Route::get('/categoria/lista', [CategoriaController::class, 'mostrar'])
        ->name('categoria.mostrar');

    Route::get('/categoria/form', [CategoriaController::class, 'formulario'])
        ->name('formulario_categoria');

    Route::post('/categoria/guardar', [CategoriaController::class, 'guardar'])
        ->name('categoria.guardar');

    Route::get('/categoria/{id}/editar', [CategoriaController::class, 'editar'])
        ->name('editar_categoria');

    Route::put('/categoria/{id}', [CategoriaController::class, 'actualizar'])
        ->name('actualizar_categoria');

    Route::delete('/categoria/{id}', [CategoriaController::class, 'eliminar'])
        ->name('eliminar_categoria');

    Route::get('/categoria/nuevo', [CategoriaController::class, 'nuevo'])
        ->name('categoria.nuevo');

    // PRODUCTOS
    Route::get('/producto/nuevo', [ProductoController::class, 'nuevo'])
        ->name('producto.nuevo');

    Route::get('/lista_producto', [ProductoController::class, 'index'])
        ->name('lista_producto');

    Route::get('/producto/formu', [ProductoController::class, 'formulario'])
        ->name('formulario_producto');

    Route::post('/producto/guardar', [ProductoController::class, 'guardar'])
        ->name('producto.guardar');

    Route::get('/producto/{id}/editar', [ProductoController::class, 'editar'])
        ->name('editar_producto');

    Route::put('/producto/{id}', [ProductoController::class, 'actualizar'])
        ->name('actualizar_producto');

    Route::delete('/producto/{id}', [ProductoController::class, 'eliminar'])
        ->name('eliminar_producto');

    // PROVEEDORES
    Route::get('/proveedores', [ProveedorController::class, 'mostrar'])
        ->name('lista_proveedor');

    Route::get('/formulario_proveedor', [ProveedorController::class, 'nuevo'])
        ->name('formulario_proveedor');

    Route::post('/proveedor/guardar', [ProveedorController::class, 'guardar'])
        ->name('proveedor.guardar');

    Route::get('/proveedor/{id}/editar', [ProveedorController::class, 'editar'])
        ->name('editar_proveedor');

    Route::put('/proveedor/{id}', [ProveedorController::class, 'actualizar'])
        ->name('actualizar_proveedor');

    Route::delete('/proveedor/{id}', [ProveedorController::class, 'eliminar'])
        ->name('eliminar_proveedor');

    // VENTAS
    Route::get('/carrito', [VentaController::class, 'index'])->name('carrito');

    Route::post('/carrito/agregar', [VentaController::class, 'agregar'])
        ->name('carrito.agregar');

    Route::post('/carrito/eliminar', [VentaController::class, 'eliminar'])
        ->name('carrito.eliminar');

    Route::post('/ventas/cobrar', [VentaController::class, 'cobrar'])
        ->name('ventas.cobrar');

    // USUARIOS
    Route::get('/usuario/nuevo', [UsuarioController::class, 'nuevo'])
        ->name('usuario.nuevo');

    Route::post('/usuario/guardar', [UsuarioController::class, 'guardar'])
        ->name('usuario.guardar');

    Route::get('/usuarios', [UsuarioController::class, 'lista'])
        ->name('usuario.lista');

    Route::get('/usuario/{id}/editar', [UsuarioController::class, 'editar'])
        ->name('usuario.editar');

    Route::put('/usuario/{id}/desactivar', [UsuarioController::class, 'desactivar'])
        ->name('usuario.desactivar');

    Route::put('/usuario/{id}/actualizar', [UsuarioController::class, 'actualizar'])
        ->name('usuario.actualizar');
});