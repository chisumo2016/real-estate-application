<?php

namespace App\Providers;

use App\EventType;
use App\Location;
use Illuminate\Support\Facades\View;
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
//        $this->app->bind('path.public', function() {
//            return base_path().'/public';
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('globalLocation', Location::all());
            $view->with('globalEventTypes', EventType::all());
        });

    }
}
