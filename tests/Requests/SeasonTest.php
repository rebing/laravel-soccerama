<?php

use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group season
 */
class SeasonTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_seasons()
    {
        $response = Soccerama::seasons()->all();

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_season_by_id()
    {
        $response = Soccerama::seasons()->byId($this->seasonId);

        $this->assertEquals($this->seasonId, $response->id);
    }

    /**
     * @test
     */
    public function it_retrieves_results_for_a_season_by_id()
    {
        $response = Soccerama::seasons()->resultsById($this->seasonId);

        $this->assertEquals($this->seasonId, $response->id);
    }

}