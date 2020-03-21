<?php

namespace Revolution\Pagination\Bulma;

use Illuminate\Support\ServiceProvider;

class BulmaServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../pagination', 'pagination-bulma');

        $this->publishes(
            [
                __DIR__.'/../pagination' => $this->app->resourcePath('views/vendor/pagination-bulma'),
            ],
            'pagination-bulma'
        );
    }
}
