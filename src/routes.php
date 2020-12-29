<?php

use Illuminate\Support\Facades\Route;
use Mouseleo\LaravelSso\Controllers\UserController;

Route::group(['prefix' => 'sso'], function () {
    Route::match(['get', 'post'], 'user/index', [UserController::class, 'index']);
});
