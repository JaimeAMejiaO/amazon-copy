<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use App\Models\CarroCompra;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            if(auth()->user())
            {
                $usuario_actual = User::with('rol')->find(auth()->user()->id);
                $view->with('usuario_actual', $usuario_actual);
                $cantidad_productos_en_carrito = CarroCompra::where('id_usuario', auth()->user()->id)->count();
                $view->with('cant_productos_en_carrito', $cantidad_productos_en_carrito);
            }
            else{
                $cantidad_productos_en_carrito = 0;
                $view->with('cant_productos_en_carrito', $cantidad_productos_en_carrito);
            }
        });
    }
}
