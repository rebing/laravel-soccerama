<?php

use Rebing\Soccerama\Facades\Soccerama;

class CompetitionTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_competitions()
    {
        $response = Soccerama::competitions();

        $this->assertNotNull($response);
        $this->assertArrayHasKey(0, $response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_key_by_id()
    {
        $response = Soccerama::competitionById(43);

        $this->assertNotNull($response->name);
    }

}