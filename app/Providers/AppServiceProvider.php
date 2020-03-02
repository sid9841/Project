<?php

namespace App\Providers;

use App\Campaign;
use App\category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $campaign= Campaign::all();
        $categoriesAll=category::all();
        view()->share(compact('campaign','categoriesAll'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
