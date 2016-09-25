<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group odds
 */
class OddsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_odds_by_match_id()
    {
        $response = Soccerama::odds()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_odds_by_match_and_bookmaker_id()
    {
        $response = Soccerama::odds()->byMatchAndBookmakerId($this->matchId, $this->bookmakerId);

        $this->assertNotEmpty($response->data);
    }

}