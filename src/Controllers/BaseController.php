<?php

namespace Mouseleo\LaravelSso\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class BaseController extends Controller
{
    public function index()
    {
        return 'Index via BaseController';
    }

    public function show()
    {
        return 'Show via BaseController';
    }

    public function create()
    {
        return 'Create via BaseController';
    }

    public function update()
    {
        return 'Update via BaseController';
    }

    public function destroy()
    {
        return 'Destroy via BaseController';
    }

    public function restore()
    {
        return 'Restore via BaseController';
    }
}
