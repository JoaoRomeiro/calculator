<?php

use Illuminate\Support\Facades\Route;

Route::get('calculator', function () {
    echo "Hello from calculator package";
});

//
Route::get('add/{a}/{b}', [\jromeiro\Calculator\CalculatorController::class, 'add']);
Route::get('substract/{a}/{b}', [\jromeiro\Calculator\CalculatorController::class, 'substract']);
