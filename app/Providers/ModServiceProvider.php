<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path()."/Helper/Mod.php";
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
