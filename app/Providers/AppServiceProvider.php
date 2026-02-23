<?php

namespace App\Providers;

use App\Services\Auth\ERPService;
use App\Services\Auth\ERPUserProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Auth::provider('erp-api', function ($app, array $config) {
            return new ERPUserProvider($app->make(ERPService::class));
        });
    }
}
