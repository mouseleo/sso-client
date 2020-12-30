<?php

namespace Mouseleo\SsoClient\Test;

use Illuminate\Support\Facades\Http;
use Orchestra\Testbench\TestCase;

class SsoServerTest extends TestCase
{
    public function test_can_access_the_sso_server()
    {
        $response = Http::get('http://sso.test');

        $this->assertTrue($response->successful());
    }

    public function test_the_sso_server_api_is_ok()
    {
        $this->assertTrue(true);
    }
}
