<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group event
 */
class EventTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_an_event_by_match_id()
    {
        $response = Soccerama::events()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->data);
    }

}