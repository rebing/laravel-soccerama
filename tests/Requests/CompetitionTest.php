<?php

use Illuminate\Support\Facades\Config;
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
        $response = Soccerama::competitions()->all();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_competitions_without_data()
    {
        Config::set('soccerama.without_data', true);
        $response = Soccerama::competitions()->all();

        $this->assertArrayHasKey(0, $response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_competition_by_id()
    {
        $response = Soccerama::competitions()->byId($this->competitionId);

        $this->assertEquals($this->competitionId, $response->id);
        $this->assertNotNull($response->name);
    }

}