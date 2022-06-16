<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
    }

    // public function boot()
    // { 
    //     //begitu digenerate tombol2 pagi nya tolong distyle pake bootstrap jgn tailwind
    //     Paginator::useBootstrap();
    // }
}
