<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UsersTransServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('App\Service\UsersTransServiceInterface', function () {
            $request = app(\Illuminate\Http\Request::class);
    
            return app('App\Service\UsersTransService', [$request]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
