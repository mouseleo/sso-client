<?php

namespace Mouseleo\SsoClient\Test;

use Mouseleo\SsoClient\SsoClientServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Get package providers array.
     *
     * @param [type] $app
     * @return void
     */
    protected function getPackageProviders($app)
    {
        return [
            SsoClientServiceProvider::class,
        ];
    }

    /**
     * Get environment set up
     *
     * @param [type] $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
        $env_path = __DIR__ . '/../.env';
        $result = file_get_contents($env_path);
        $arr = preg_split('/\s+/', $result);

        foreach ($arr as $line) {
            putenv($line);
        }

        // $app->loadEnvironmentFrom($env_path);
        // dd($_ENV);
    }
}
