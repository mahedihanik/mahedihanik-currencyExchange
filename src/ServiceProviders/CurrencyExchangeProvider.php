<?php

namespace Mahedihanik\CurrencyExchange\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class CurrencyExchangeProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../Views', 'mahedihanik');
    }
}
