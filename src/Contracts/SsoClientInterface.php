<?php

namespace Mouseleo\SsoClient\Contracts;

interface SsoClientInterface
{
    /**
     * Fetch the register app users from sso server.
     *
     * @return array|null
     */
    public function fetch();

    /**
     * Check the token via sso server and return the user attributes.
     *
     * @param string $token
     * @return array|null
     */
    public function check(string $token = '');
}
