<?php

use Illuminate\Support\Facades\Config;
use Rebing\Soccerama\SocceramaServiceProvider;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    protected $matchId, $competitionId, $countryId, $teamId, $seasonId, $playerId, $bookmakerId;

    public function setUp()
    {
        parent::setup();

        // A random account's token, replace it with a real token for testing
        Config::set('soccerama.api_token', 'YOUR_TEST_KEY_HERE');

        // Usable with an English Premier League plan
        $this->matchId = 683059;
        $this->competitionId = 29;
        $this->countryId = 9;
        $this->teamId = 119;
        $this->seasonId = 651;
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