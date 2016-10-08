<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group top-scorer
 */
class TopScorerTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_top_scorer_by_season()
    {
        $response = Soccerama::topscorers()->bySeasonId($this->seasonId);

        $this->assertNotEmpty($response->data);
    }

}