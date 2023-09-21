<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/usuario', UsuarioController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
