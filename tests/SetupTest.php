<?php

use Illuminate\Support\Facades\Config;
use Rebing\Soccerama\SocceramaClient;

class SetupTest extends TestCase {

    /**
     * @expectedException InvalidArgumentException
     *
     * @test
     */
    public function it_throws_an_exception_if_no_api_token_set()
    {
        Config::set('soccerama.api_token', '');

        $soccerama = new SocceramaClient();
    }

}