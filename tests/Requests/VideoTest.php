<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group video
 */
class VideoTest extends TestCase {
    
    /**
     * @test
     */
    public function it_retrieves_videos_by_match_id()
    {
        $response = Soccerama::videos()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->data);
    }

}