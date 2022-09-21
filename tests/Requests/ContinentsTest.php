<?php

use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group countries
 */
class ContinentsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_continents()
    {
        $response = SoccerAPI::continents()->all();

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_continent_by_id()
    {
        $response = SoccerAPI::continents()->byId($this->continentId);

        $this->assertEquals($this->continentId, $response->data->id);
    }

}