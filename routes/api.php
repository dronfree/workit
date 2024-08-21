<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Api\OrdersController;

Route::middleware('auth:api')->group(function(){
    Route::get('/user', [ApiController::class, 'user']);
    Route::post('/orders', [OrdersController::class, 'create']);
    Route::post('/orders/assign', [OrdersController::class, 'assign']);
});
