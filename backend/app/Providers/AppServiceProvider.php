<?php

namespace App\Providers;

use App\DomainModels\CustomerRepositoryInterface;
use App\DomainModels\KeptBottleRepositoryInterface;
use App\DomainModels\RestaurantRepositoryInterface;
use App\Repositories\CustomerRepository;
use App\Repositories\KeptBottleRepository;
use App\Repositories\RestaurantRepository;
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
        $this->app->singleton(RestaurantRepositoryInterface::class, function ($app) {
            return new RestaurantRepository();
        });
        $this->app->singleton(CustomerRepositoryInterface::class, function ($app) {
            return new CustomerRepository();
        });
        $this->app->singleton(KeptBottleRepositoryInterface::class, function ($app) {
            return new KeptBottleRepository();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
