<?php

namespace Mouseleo\SsoClient;

use Illuminate\Support\ServiceProvider;
use Mouseleo\SsoClient\Commands\InstallSsoClient;
use Mouseleo\SsoClient\Services\SsoClient;

class SsoClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sso.php', 'sso');

        $this->app->singleton('ssoClient', function ($app) {
            return new SsoClient();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Register the command if we are using the application via the CLI.
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallSsoClient::class,
            ]);

            $this->publishes([
                __DIR__ . '/../config/sso.php' => config_path('sso.php'),
            ], 'config');
        }
    }
}
