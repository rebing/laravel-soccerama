<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group player
 */
class PlayerTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_a_player_by_id()
    {
        $response = SoccerAPI::players()->byId($this->playerId);

        $this->assertEquals($this->playerId, $response->data->player_id);
    }

}