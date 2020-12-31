<?php

namespace Mouseleo\SsoClient\Test\Feature;

use Exception;
use Illuminate\Support\Facades\Http;
use Mouseleo\SsoClient\Facades\SsoClient;
use Mouseleo\SsoClient\Test\TestCase as TestTestCase;

class SsoClientFacadeTest extends TestTestCase
{
    /**
     * It can fetch users from sso server.
     *
     * @return void
     */
    public function test_it_can_fetch_users()
    {
        $users = SsoClient::fetch();

        $this->assertTrue(count($users) > 0);
    }

    /**
     * It can check if the token is correct.
     *
     * @return void
     */
    public function test_it_can_check_if_the_token_is_correct()
    {
        $token = config('sso.token');
        $user_attributes = SsoClient::check($token);

        $this->assertTrue(count($user_attributes) > 0);
    }

    /**
     * It cannot check if the token is wrong
     *
     * @return void
     */
    public function test_it_cannot_check_if_the_token_is_wrong()
    {
        $token = '';
        $result = SsoClient::check($token);

        $this->assertTrue($result == null);
    }
}
