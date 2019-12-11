<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('foo', function() {
            return 'bar';
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
