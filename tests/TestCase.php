<?php

use Illuminate\Support\Facades\Config;
use Rebing\Soccerama\SocceramaServiceProvider;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    public function setUp()
    {
        parent::setup();

        // A random account's token
        Config::set('soccerama.api_token', 'x01bjuXDuho4Lfu1QrJs9nVMQKN5KJDwlvG3lkhtD0Sbvnqn6SIZsXtMhw5V');
    }

    /**
     * Boots the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';

        $app->register(SocceramaServiceProvider::class);

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

}