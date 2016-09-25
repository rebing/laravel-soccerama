<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group statistics
 */
class StatisticsTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_statistics_by_match_id()
    {
        $response = Soccerama::statistics()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->home);
        $this->assertNotEmpty($response->away);
    }

}