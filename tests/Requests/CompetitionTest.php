<?php

use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group competition
 */
class CompetitionTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_competitions()
    {
        $response = Soccerama::competitions();

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_key_by_id()
    {
        $id = 43;
        $response = Soccerama::competitionById($id);

        $this->assertEquals($id, $response->id);
        $this->assertNotNull($response->name);
    }

}