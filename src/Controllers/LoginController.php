<?php

namespace Mouseleo\LaravelSso\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends BaseController
{
    public function create()
    {
        return [
            'data' => [
                'token' => 'Your access token string',
            ],
        ];
    }
}
