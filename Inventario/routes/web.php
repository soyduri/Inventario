<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Models\Categoria;
use App\Models\Proveedore;

//rutas para mostrar datos
Route::get('/', [ProductoController::class, 'index'])->name('index.productos');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('index.categorias');
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('index.proveedores');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('detalles.producto');

//rutas para formularios de crear
Route::get('/crear_producto', [ProductoController::class, 'create'])->name('create.producto');
Route::get('/crear_categoria', [CategoriaController::class, 'create'])->name('create.categoria');
Route::get('/crear_proveedor', [ProveedorController::class, 'create'])->name('create.proveedor');
//rutas para registrar datos
Route::post('/registro_producto', [ProductoController::class, 'store'])->name('store.producto');
Route::post('/registro_categoria', [CategoriaController::class, 'store'])->name('store.categoria');
Route::post('/registro_proveedor', [ProveedorController::class, 'store'])->name('store.proveedor');
//rutas para formulario de editar
Route::get('/editar_producto/{id}', [ProductoController::class, 'edit'])->name('editar.producto');
Route::get('/editar_categoria/{id}', [CategoriaController::class, 'edit'])->name('editar.categoria');
Route::get('/editar_proveedor/{id}', [ProveedorController::class, 'edit'])->name('editar.proveedor');
//rutas par actualizar datos
Route::put('/actualizar_producto/{id}', [ProductoController::class, 'update'])->name('update.producto');
Route::put('/actualizar_categoria/{id}', [CategoriaController::class, 'update'])->name('update.categoria');
Route::put('/actualizar_proveedor/{id}', [ProveedorController::class, 'update'])->name('update.proveedor');
//rutas para eliminar
Route::delete('/eliminar_producto/{id}', [ProductoController::class, 'destroy'])->name('eliminar.producto');
Route::delete('/eliminar_categoria/{id}', [CategoriaController::class, 'destroy'])->name('eliminar.categoria');
Route::delete('/eliminar_proveedor/{id}', [ProveedorController::class, 'destroy'])->name('eliminar.proveedor');
