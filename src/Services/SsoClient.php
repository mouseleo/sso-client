<?php

namespace Mouseleo\SsoClient\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Mouseleo\SsoClient\Contracts\SsoClientInterface;

class SsoClient implements SsoClientInterface
{

    /**
     * Fetch the register app users from sso server.
     *
     * @return array
     */
    public function fetch()
    {
        $response = Http::withToken(config('sso.token'))
            ->baseUrl(config('sso.base_url'))
            ->post('register-app-user-export/create', [
                'register_app_id' => config('sso.register_app_id')
            ]);

        if ($response->successful()) {
            return $response->json('data');
        } else {
            return null;
        }
    }

    /**
     * Check the token via sso server and return the user attributes.
     *
     * @param string $token
     * @return array
     */
    public function check(string $token = '')
    {
        $token = $token ?: request()->bearerToken();
        $response = Http::withToken($token)
            ->baseUrl(config('sso.base_url'))
            ->post('auth-check/create', [
                'register_app_id' => config('sso.register_app_id'),
            ]);

        if ($response->successful()) {
            return $response->json('data');
        } else {
            return null;
        }
    }
}
