<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group player
 */
class PlayerTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_players_by_team_and_season()
    {
        $response = Soccerama::players()->byTeamAndSeasonId($this->teamId, $this->seasonId);

        $this->assertEquals($this->teamId, $response->id);
    }

    /**
     * @test
     */
    public function it_gets_players_by_team()
    {
        $response = Soccerama::players()->byTeamId($this->teamId);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_gets_a_player_by_id()
    {
        $response = Soccerama::players()->byId($this->playerId);

        $this->assertEquals($this->playerId, $response->id);
    }

}