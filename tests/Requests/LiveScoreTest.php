<?php

use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group live-score
 */
class LiveScoreTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_livescores_for_today()
    {
        $response = SoccerAPI::livescores()->today();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_livescores_for_now()
    {
        $response = SoccerAPI::livescores()->now();

        $this->assertNotEmpty($response->data);
    }

}