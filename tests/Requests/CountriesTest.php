<?php

use Rebing\Soccerama\Facades\Soccerama;

/**
 * @group countries
 */
class CountriesTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_countries()
    {
        $response = Soccerama::countries()->all();

        $this->assertNotEmpty($response);
    }

    /**
     * @test
     */
    public function it_retrieves_a_country_by_id()
    {
        $response = Soccerama::countries()->byId($this->countryId);

        $this->assertEquals($this->countryId, $response->id);
    }

}