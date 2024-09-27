<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;


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
    {
        //
        Schema::defaultStringLength(191);
        Blade::if('user', function () {
            // Assuming 'isAdmin' is a method in your User model that checks if the user is an admin
            return Auth::check() && !Auth::user()->isAdmin();
        });
        Blade::if('admin', function () {
            // Assuming 'isAdmin' is a method in your User model that checks if the user is an admin
            return Auth::check() && Auth::user()->isAdmin();
        });
    }
}
