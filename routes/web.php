<?php

use App\Livewire\CarroCompras;
use App\Livewire\Categorias;
use App\Livewire\CrearProducto;
use App\Livewire\Direcciones;
use App\Livewire\EditarPerfil;
use App\Livewire\Marcas;
use App\Livewire\MetodoPagos;
use App\Livewire\Principal;
use App\Livewire\Vender_1;
use App\Livewire\VerProductos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/principal', Principal::class)->name('principal');

Route::get('/metodo-pagos', MetodoPagos::class)->name('metodo-pagos');

Route::get('/direcciones', Direcciones::class)->name('direcciones');

Route::get('/ver-productos', VerProductos::class)->name('ver-productos');

Route::get('/carro-compras', CarroCompras::class)->name('carro-compras');

Route::get('/categorias', Categorias::class)->name('categorias');

Route::get('/marcas', Marcas::class)->name('marcas');

Route::get('/crear_producto', CrearProducto::class)->name('crear-producto');

Route::get('/crear_modelo_producto', CrearModeloProducto::class)->name('crear-modelo-producto');


Route::get('/departamentos', Departamentos::class)->name('departamentos');

Route::get('/editar_perfil', EditarPerfil::class)->name('editar_perfil');
