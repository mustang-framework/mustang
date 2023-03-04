<?php

namespace App\Containers\AppSection\Authentication\Providers;

use Mustang\Core\Loaders\RoutesLoaderTrait;
use App\Ship\Parents\Providers\AuthServiceProvider as ParentAuthProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;
use Laravel\Passport\RouteRegistrar;

class AuthServiceProvider extends ParentAuthProvider
{
    use RoutesLoaderTrait;

    /**
     * Indicates if loading of the provider is deferred.
     */
    protected bool $defer = true;

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        parent::boot();

        $this->registerPassport();

    }

    private function registerPassport(): void
    {
        if (config('mustang.api.enabled-implicit-grant')) {
            Passport::enableImplicitGrant();
        }

        Passport::tokensExpireIn(Carbon::now()->addMinutes(config('mustang.api.expires-in')));

        Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(config('mustang.api.refresh-expires-in')));
    }
}
