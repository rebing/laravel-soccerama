<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group video
 */
class TVStationTest extends TestCase {
    

    /**
     * @test
     */
    public function it_retrieves_tvstations_by_match_id()
    {
        $response = SoccerAPI::tvstations()->byMatchId($this->tvStationMatchId);

        $this->assertNotEmpty($response->data);
    }

}