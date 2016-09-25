<?php
use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group commentary
 */
class CommentaryTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_commentaries_by_match_id()
    {
        $response = Soccerama::commentaries()->byMatchId($this->matchId);

        $this->assertNotEmpty($response->data);
    }

}