<?php

use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group season
 */
class SeasonTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_seasons()
    {
        $response = SoccerAPI::seasons()->all();

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_season_by_id()
    {
        $response = SoccerAPI::seasons()->byId($this->seasonId);

        $this->assertEquals($this->seasonId, $response->data->id);
    }

}