<?php

namespace Mouseleo\SsoClient\Test;

use Mouseleo\SsoClient\SsoClientServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        // additional setUp
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
    }
}
