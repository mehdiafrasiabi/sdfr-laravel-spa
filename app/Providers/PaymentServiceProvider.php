<?php

namespace App\Providers;

use App\Contracts\PaymentGateWayInterface;
use App\Models\PaymentMethod;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGateWayInterface::class,function (){
            $activePayment = PaymentMethod::query()->where("active",true)->first();
            $gateWayClass = 'App\\Services\\PaymentGateWay\\'.$activePayment->name;
            if(!$activePayment ||!class_exists($gateWayClass)){
                throw new \Exception("هیچ درگاهی وجود ندارد");
            }
            return new $gateWayClass;
        });
    }

}
