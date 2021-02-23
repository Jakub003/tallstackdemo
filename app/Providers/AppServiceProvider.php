<?php

namespace App\Providers;

use App\Models\Project;
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
        view()->composer('backend.components.left-sidebar', function ($view){
            $view->with('projects',   Project::where('is_active', 1)->orderBy('order', 'asc')->get());
        });
    }
}
