<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LmServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Doc Interface and Repository Bind
        // $this->app->bind(
        //     'App\Libs\Interfaces\DocInterface',
        //     'App\Libs\Repositories\DocRepository'
        //     );
    }
}
