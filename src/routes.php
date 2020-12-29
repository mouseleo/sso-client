<?php

use Illuminate\Support\Facades\Route;
use Mouseleo\LaravelSso\Controllers\UserController;

Route::group(['prefix' => 'sso/api', 'middleware' => ['api']], function () {
    Route::match(['get', 'post'], 'user/index', [UserController::class, 'index']);
    Route::match(['get', 'post'], 'user/show', [UserController::class, 'show']);
    Route::match(['get', 'post'], 'user/create', [UserController::class, 'create']);
    Route::match(['get', 'post'], 'user/update', [UserController::class, 'update']);
    Route::match(['get', 'post'], 'user/destroy', [UserController::class, 'destroy']);
    Route::match(['get', 'post'], 'user/restore', [UserController::class, 'restore']);
});
