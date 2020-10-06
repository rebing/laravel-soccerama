<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Commentary extends SoccerAPIClient {

    public function byMatchId($matchId)
    {
        return $this->callData('commentaries/fixture/' . $matchId);
    }

}