<?php

namespace Mouseleo\SsoClient\Test\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Mouseleo\SsoClient\Test\TestCase;

class InstallSsoClientTest extends TestCase
{
    public function test_install_command_copies_the_configuration()
    {
        // make sure we are starting form a clean state.
        if (File::exists(config_path('sso.php'))) {
            unlink(config_path('sso.php'));
        }

        $this->assertFalse(File::exists(config_path('sso.php')));

        Artisan::call('sso-client:install');

        $this->assertTrue(File::exists(config_path('sso.php')));
    }
}
