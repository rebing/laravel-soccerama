<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group standings
 */
class StandingsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_standings_by_season()
    {
        $response = Soccerama::standings()->bySeasonId($this->seasonId);

        $this->assertNotEmpty($response->data[0]->standings->data);
    }

}