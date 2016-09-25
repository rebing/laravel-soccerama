<?php

use Carbon\Carbon;
use Rebing\Soccerama\Facades\Soccerama;

class MatchTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_matches_by_date_range_by_carbon_input()
    {

        $fromDate = Carbon::createFromDate(2016, 9, 1);
        $toDate = Carbon::createFromDate(2016, 9, 10);

        $response = Soccerama::matchesByDate($fromDate, $toDate);

        $this->assertNotNull($response);
        $this->assertArrayHasKey(0, $response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_match_by_id()
    {
        $response = Soccerama::matchById(689930);

        $this->assertNotNull($response->id);
    }

}