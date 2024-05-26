<?php

use App\Livewire\CarroCompras;
use App\Livewire\Categorias;
use App\Livewire\CrearModeloProducto;
use App\Livewire\CrearPedido;
use App\Livewire\CrearProducto;
use App\Livewire\Direcciones;
use App\Livewire\EditarPerfil;
use App\Livewire\FilterByDpto;
use App\Livewire\GarantiaReembolsos;
use App\Livewire\Marcas;
use App\Livewire\MetodoPagos;
use App\Livewire\Principal;
use App\Livewire\TarjetaRegalo;
use App\Livewire\VerProductos;
use App\Livewire\Preguntas;
use App\Livewire\VerMisGarantiaReembolsos;
use App\Livewire\VerPedidos;
use App\Livewire\VerTodosProductos;
use App\Livewire\VerTodosUsuarios;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;


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
    return redirect()->route('principal');
});

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();
    
    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ],[
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);

    Auth::login($user);

    return redirect('/principal');

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/principal', Principal::class)->name('principal');

Route::get('/metodo-pagos', MetodoPagos::class)->name('metodo-pagos');

Route::get('/direcciones', Direcciones::class)->name('direcciones');

Route::get('/ver-productos/{id}', VerProductos::class)->name('ver-productos');

Route::get('/carro-compras', CarroCompras::class)->name('carro-compras');

Route::get('/categorias', Categorias::class)->name('categorias');

Route::get('/marcas', Marcas::class)->name('marcas');

Route::get('/crear_producto', CrearProducto::class)->name('crear-producto');

Route::get('/crear_modelo_producto/{id}', CrearModeloProducto::class)->name('crear-modelo-producto');

Route::get('/editar_perfil', EditarPerfil::class)->name('editar_perfil');

Route::get('/tarjeta-regalo', TarjetaRegalo::class)->name('tarjeta-regalo');

Route::get('/crear_pedido', CrearPedido::class)->name('crear-pedido');

Route::get('/preguntas', Preguntas::class)->name('preguntas');

Route::get('/ver-pedidos', VerPedidos::class)->name('ver-pedidos');

Route::get('/ver-todos-usuarios', VerTodosUsuarios::class)->name('ver-todos-usuarios');

Route::get('/ver-todos-productos', VerTodosProductos::class)->name('ver-todos-productos');

Route::get('/garantia-reembolsos/{id}', GarantiaReembolsos::class)->name('garantia-reembolsos');

Route::get('/ver-mis-garantias-reembolsos', VerMisGarantiaReembolsos::class)->name('ver-mis-garantias-reembolsos');