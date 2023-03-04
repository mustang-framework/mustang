<?php

namespace App\Ship\Parents\Providers;

use Mustang\Core\Abstracts\Providers\MiddlewareServiceProvider as AbstractMiddlewareServiceProvider;

abstract class MiddlewareServiceProvider extends AbstractMiddlewareServiceProvider
{
    protected array $middlewares = [];

    protected array $middlewareGroups = [];

    protected array $middlewarePriority = [];

    protected array $routeMiddleware = [];
}
