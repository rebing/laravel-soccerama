<?php

use Illuminate\Support\Facades\Config;
use Rebing\Soccerama\SocceramaServiceProvider;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    protected $matchId, $competitionId, $countryId, $teamId, $seasonId, $playerId, $bookmakerId;

    public function setUp()
    {
        parent::setup();

        // A random account's token, replace it with a real token for testing
        Config::set('soccerama.api_token', 'x01bjuXDuho4Lfu1QrJs9nVMQKN5KJDwlvG3lkhtD0Sbvnqn6SIZsXtMhw5V');

        $this->matchId = 689930;
        $this->competitionId = 43;
        $this->countryId = 13;
        $this->teamId = 146;
        $this->seasonId = 355;
        $this->playerId = 32042;
        $this->bookmakerId = 1;
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