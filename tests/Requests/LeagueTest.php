<?php

use Illuminate\Support\Facades\Config;
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group competition
 */
class LeagueTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_leagues()
    {
        $response = SoccerAPI::leagues()->all();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_leagues_without_data()
    {
        Config::set('soccerapi.without_data', true);
        $response = SoccerAPI::leagues()->all();

        $this->assertArrayHasKey(0, $response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_league_by_id()
    {
        $response = SoccerAPI::leagues()->byId($this->leagueId);

        $this->assertEquals($this->leagueId, $response->data->id);
        $this->assertNotNull($response->data->name);
    }

}