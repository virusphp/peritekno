<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category; 

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		view()->composer('blog.widget.widget', function($view) {
			$categories = Category::with(['posts' => function($query) {
				$query->published();
			}])->orderBy('name', 'asc')->get();

			$view->with('categories', $categories);
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
