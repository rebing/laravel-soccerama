<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group top-scorer
 */
class TopScorerTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_top_scorer_by_season()
    {
        $response = SoccerAPI::topscorers()->bySeasonId($this->seasonId);

        $this->assertNotEmpty($response->data);
    }

}