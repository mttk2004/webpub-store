<?php

namespace App\Providers;

use App\Http\ViewComposers\CartViewComposer;
use App\Http\ViewComposers\HeaderViewComposer;
use Illuminate\Support\Facades\View;
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
		View::composer('components.cart-button', CartViewComposer::class);
		View::composer('components.header', HeaderViewComposer::class);
    }
}
