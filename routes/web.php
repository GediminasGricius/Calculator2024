<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', [CalculatorController::class, "form"]);

Route::post("/result",[CalculatorController::class, "result"]);
