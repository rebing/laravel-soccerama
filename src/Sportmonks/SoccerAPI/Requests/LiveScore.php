<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class LiveScore extends SoccerAPIClient {

    public function today()
    {
        return $this->callData('livescores');
    }

    public function now()
    {
        return $this->callData('livescores/now');
    }

}