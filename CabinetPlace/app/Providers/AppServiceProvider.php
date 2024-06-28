<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // Ajouter ceci

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   require_once app_path('helpers.php');
        Schema::defaultStringLength(191); // Ajouter ceci
    }
}
