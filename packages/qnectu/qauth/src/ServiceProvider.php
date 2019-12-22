<?php

namespace qnectu\Qauth;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/qauth.php';

    public function boot()
    {   $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
            self::CONFIG_PATH => config_path('qauth.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'qauth'
        );

        $this->app->bind('qauth', function () {
            return new Qauth();
        });
    }
}
