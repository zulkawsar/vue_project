<?php

namespace App\Providers;

use App\Responser\Car;
use App\Services\PaypalGateway;
use App\Services\PaymentService;
use App\Services\CustomPaymentGateway;
use Illuminate\Support\ServiceProvider;
use App\Responser\Interface\VechicleInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VechicleInterface::class, function(){
            return new Car();
        });

        
        // $this->app->bind(PaymentService::class, function(){
        //     return new PaypalGateway('233124eee');
        // }, true); // pass true for singleton

        //singleton
        $this->app->singleton(PaymentService::class, function(){
            return new PaypalGateway('233124eee');
        }, true);

        // for 3rd party package service extend 
        $this->app->singleton(PaymentService::class, function(){
            return new CustomPaymentGateway('4434233');
        }, true);

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
