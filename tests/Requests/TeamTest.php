<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group team
 */
class TeamTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_all_teams_by_season_id()
    {
        $response = SoccerAPI::teams()->allBySeasonId($this->seasonId);

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_gets_a_team_by_id()
    {
        $response = SoccerAPI::teams()->byId($this->teamId);

        $this->assertEquals($this->teamId, $response->data->id);
    }
}