<?php

use App\Http\Controllers\TaskUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[TaskUserController::class, 'index']);

Route::get('/user/{id}',[TaskUserController::class, 'get']);

Route::post('/store-user',[TaskUserController::class, 'store']);

Route::get('/resume',[TaskUserController::class, 'index']);
