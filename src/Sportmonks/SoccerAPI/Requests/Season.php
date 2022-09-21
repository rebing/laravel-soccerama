<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Season extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('seasons');
    }

    public function byId($seasonId)
    {
        return $this->call('seasons/' . $seasonId);
    }
}