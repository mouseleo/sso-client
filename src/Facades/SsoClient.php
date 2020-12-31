<?php

namespace Mouseleo\SsoClient\Facades;

use Illuminate\Support\Facades\Facade;

class SsoClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ssoClient';
    }
}
