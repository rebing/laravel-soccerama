<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Player extends SoccerAPIClient {

    public function byId($playerId)
    {
        return $this->callData('players/' . $playerId);
    }

}