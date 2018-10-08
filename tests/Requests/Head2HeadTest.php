<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group team
 */
class Head2HeadTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_head_to_head_statistics_between_teams_by_ids()
    {
        $response = SoccerAPI::head2head()->betweenTeams($this->team1Id,$this->team2Id);

        $this->assertNotEmpty($response);
    }

}