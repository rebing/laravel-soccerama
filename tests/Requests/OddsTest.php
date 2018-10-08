<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group odds
 */
class OddsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_odds_by_match_id()
    {
        $response = SoccerAPI::odds()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_odds_by_match_and_bookmaker_id()
    {
        $response = SoccerAPI::odds()->byMatchAndBookmakerId($this->matchId, $this->bookmakerId);

        $this->assertNotEmpty($response->data);
    }

}