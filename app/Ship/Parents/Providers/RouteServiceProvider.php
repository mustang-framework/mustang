<?php

namespace App\Ship\Parents\Providers;

use Mustang\Core\Abstracts\Providers\RouteServiceProvider as AbstractRouteServiceProvider;

abstract class RouteServiceProvider extends AbstractRouteServiceProvider
{
    public function boot(): void
    {
        $this->configureRateLimiting();

        parent::boot();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting(): void
    {
    }
}
