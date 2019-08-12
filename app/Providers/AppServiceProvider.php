<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Post;
use App\Publication;

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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('partials.blog.sidebar', function($view){
            return $view->with(['recentPosts' => Post::recent()] );
        });

        view()->composer('partials.blog.sidebar', function($view){
            return $view->with(['recentPublications' => Publication::recent()] );
        });
    }
}
