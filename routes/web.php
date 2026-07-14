<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return redirect('/hava-durumu');
});

Route::get('/hava-durumu', [WeatherController::class, 'index']);