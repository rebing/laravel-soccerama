<?php

use Carbon\Carbon;
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group live-score
 */
class FixtureTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_carbon()
    {
        $fromDate = Carbon::createFromDate(2016, 9, 10);
        $toDate = Carbon::createFromDate(2016, 10, 10);
        $response = SoccerAPI::fixtures()->betweenDates($fromDate,$toDate);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_string()
    {
        $fromDate = '2016-09-10';
        $toDate = '2016-10-10';
        $response = SoccerAPI::fixtures()->betweenDates($fromDate,$toDate);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_using_carbon()
    {
        $date = Carbon::createFromDate(2016, 9, 10);
        $response = SoccerAPI::fixtures()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_using_string()
    {
        $date = '2016-09-10';
        $response = SoccerAPI::fixtures()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixture_by_match_id()
    {
        $response = SoccerAPI::fixtures()->byMatchId($this->matchId);

        $this->assertEquals($this->matchId, $response->data->id);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_between_teams()
    {
        $response = SoccerAPI::fixtures()->headToHead($this->firstTeamId,$this->secondTeamId);

        $this->assertNotEmpty($response->data);
    }

}