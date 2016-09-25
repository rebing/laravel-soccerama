<?php
use Rebing\Soccerama\Facades\Soccerama;


/**
 * @group bookmaker
 */
class BookmakerTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_bookmakers()
    {
        $response = Soccerama::bookmakers()->all();

        $this->assertNotEmpty($response->data);
    }

}