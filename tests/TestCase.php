<?php

use Illuminate\Support\Facades\Config;
use Sportmonks\SoccerAPI\SoccerAPIServiceProvider;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    protected $matchId, $tvStationMatchId, $leagueId, $continentId, $countryId, $fixtureId, $teamId, $firstTeamId, $secondTeamId,
        $seasonId, $playerId, $bookmakerId, $venueId, $roundId, $team1Id, $team2Id;

    public function setUp()
    {
        parent::setup();

        // A random account's token, replace it with a real token for testing
        Config::set('soccerapi.api_token', 'YOUR_TEST_KEY_HERE');

        // Usable with an English Premier League plan
        $this->matchId = 1135338;
        $this->tvStationMatchId = 7611;
        $this->leagueId = 8;
        $this->continentId = 1;
        $this->venueId = 206;
        $this->roundId = 219;
        $this->countryId = 462;
        $this->teamId = 19;
        $this->team1Id = 6;
        $this->team2Id = 27;
        $this->firstTeamId = 6;
        $this->secondTeamId = 19;
        $this->seasonId = 718;
        $this->playerId = 579;
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

        $app->register(SoccerAPIServiceProvider::class);

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        return $app;
    }

}