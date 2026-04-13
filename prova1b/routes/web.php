<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViagemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [ViagemController::class, 'index']);

Route::post('/resultado', [ViagemController::class, 'resultado']);