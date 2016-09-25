<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group team
 */
class TeamTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_all_teams_by_season_id()
    {
        $response = Soccerama::teams()->allBySeasonId($this->seasonId);

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_gets_a_team_by_id()
    {
        $response = Soccerama::teams()->byId($this->teamId);

        $this->assertEquals($this->teamId, $response->id);
    }

    /**
     * @test
     */
    public function it_gets_a_team_by_a_specific_season()
    {
        $response = Soccerama::teams()->bySeasonId($this->teamId, $this->seasonId);
    }

}