<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;


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
