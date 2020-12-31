<?php

namespace Mouseleo\SsoClient\Commands;

use Illuminate\Console\Command;

class InstallSsoClient extends Command
{
    protected $signature = 'sso-client:install';
    protected $description = 'Install the sso client package';

    public function handle()
    {
        $this->info('Installing sso client...');
        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => 'Mouseleo\SsoClient\SsoClientServiceProvider',
            '--tag' => 'config',
        ]);

        $this->info('Installed sso client');
    }
}
