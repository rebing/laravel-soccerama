<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group video
 */
class RoundTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_round_by_id()
    {
        $response = SoccerAPI::rounds()->byId($this->roundId);

        $this->assertNotEmpty($response->data);
    }

}