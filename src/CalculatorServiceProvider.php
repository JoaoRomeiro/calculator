<?php

namespace jromeiro\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->make('jromeiro\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'calculator');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}
