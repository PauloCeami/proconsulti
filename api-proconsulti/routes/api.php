<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/page', TestController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
