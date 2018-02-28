<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.patrials.header', function($view){
            $categories = Category::with(['posts'])->orderBy('name', 'asc')->get();
        return $view->with('categories', $categories);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
