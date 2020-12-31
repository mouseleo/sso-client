<?php

namespace Mouseleo\SsoClient\Test\Feature;

use Illuminate\Support\Facades\Http;
use Mouseleo\SsoClient\Test\TestCase as TestTestCase;

class SsoServerTest extends TestTestCase
{
    public function test_the_sso_server_is_ok()
    {
        $response = Http::withToken(config('sso.token'))
            ->baseUrl(config('sso.base_url'))
            ->post('auth-check/create');

        $this->assertTrue($response->successful());
    }

    public function test_can_get_authenticated_user()
    {
        $response = Http::withToken(config('sso.token'))
            ->baseUrl(config('sso.base_url'))
            ->post('auth-user/show');

        $this->assertTrue($response->successful());
    }
}
