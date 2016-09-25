<?php

namespace Rebing\Soccerama;

use Illuminate\Support\ServiceProvider;

class SocceramaServiceProvider extends ServiceProvider {

    public function boot()
    {
        $configPath = __DIR__.'/../../config';

        $this->mergeConfigFrom($configPath.'/config.php', 'soccerama');

        $this->publishes([
            $configPath.'/config.php' => config_path('soccerama.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('soccerama', function()
        {
            return new Soccerama();
        });
    }

}