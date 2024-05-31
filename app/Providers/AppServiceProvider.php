<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

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
            }
        });
    }
}
