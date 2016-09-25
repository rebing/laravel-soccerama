<?php

use Carbon\Carbon;
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group live-score
 */
class LiveScoreTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_scores_for_a_specific_date_using_carbon()
    {
        $date = Carbon::createFromDate(2016, 9, 10);
        $response = Soccerama::livescores()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_scores_for_a_specific_date_using_string()
    {
        $date = '2016-09-10';
        $response = Soccerama::livescores()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_scores_by_a_match_id()
    {
        $response = Soccerama::livescores()->byMatchId($this->matchId);

        $this->assertEquals($this->matchId, $response->id);
    }

}