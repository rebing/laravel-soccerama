<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Standings extends SoccerAPIClient {

    public function bySeasonId($seasonId)
    {
        return $this->callData('standings/season/' . $seasonId);
    }
    
    public function liveBySeasonId($seasonId)
    {
        return $this->callData('standings/season/live/' . $seasonId);
    }

}
