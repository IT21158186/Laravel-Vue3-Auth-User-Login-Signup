<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\H

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [API\UserController::class, 'login']);
Route::post('register', [API\UserController::class, 'register']);
Route::post('logout', [API\UserController::class, 'logout']);
