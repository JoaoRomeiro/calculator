<?php

namespace jromeiro\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->make('jromeiro\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'calculator');
    }

    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}
