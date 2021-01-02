<?php

use Mouseleo\SsoClient\Services\SsoClient;

if (!function_exists('sso')) {
    /**
     * Return a sso client instance.
     *
     * @return void
     */
    function sso(): SsoClient
    {
        return new SsoClient();
    }
}
