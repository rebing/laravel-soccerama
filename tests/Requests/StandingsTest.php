<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group standings
 */
class StandingsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_standings_by_season()
    {
        $response = SoccerAPI::standings()->bySeasonId($this->seasonId);

        $this->assertNotEmpty($response->data);
    }

}