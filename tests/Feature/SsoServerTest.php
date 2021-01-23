<?php

namespace Mouseleo\SsoClient\Test\Feature;

use Illuminate\Support\Facades\Http;
use Mouseleo\SsoClient\Test\TestCase as TestTestCase;
use phpDocumentor\Reflection\PseudoTypes\True_;

use function PHPUnit\Framework\assertTrue;

class SsoServerTest extends TestTestCase
{
    public function test_the_sso_server_is_ok()
    {
        $response = Http::withToken(config('sso.token'))
            ->baseUrl(config('sso.base_url'))
            ->post('auth-check/create');

        $this->assertTrue($response->successful());
    }

    public function test_env()
    {
        assertTrue(true);
    }
}
