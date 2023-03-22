<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;

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
        View::composer('FrontEnd.include.banner', function($view){
            $view->with('categories', Category::where('category_status',1)->get());
        });
        View::composer('FrontEnd.include.dish', function($view){
            $view->with('categories', Category::where('category_status',1)->get());
        });
    }
}
