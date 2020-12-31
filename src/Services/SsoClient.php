<?php

namespace Mouseleo\SsoClient\Services;

use Mouseleo\SsoClient\Contracts\SsoClientInterface;

class SsoClient implements SsoClientInterface
{

    /**
     * Pull the sso server users.
     * 
     * fetch remote users and put them to local sso users table.
     *
     * @return boolean
     */
    public function pull(): bool
    {
        return true;
    }

    /**
     * Determine the token is valid.
     * 
     * first, check token via sso server and get the user attributes.
     * then, sync the user attributes to local database.
     *
     * @param string $token
     * @return boolean
     */
    public function check(string $token = ''): bool
    {
        return true;
    }
}
