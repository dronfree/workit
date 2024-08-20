<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:api')->group(function(){
    Route::get('/user', [ApiController::class, 'user']);
});
