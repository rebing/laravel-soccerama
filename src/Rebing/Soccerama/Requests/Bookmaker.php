<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Bookmaker extends SocceramaClient {

    public function all()
    {
        return $this->callData('bookmakers');
    }

}