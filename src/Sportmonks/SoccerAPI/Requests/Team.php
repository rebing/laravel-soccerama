<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Team extends SoccerAPIClient {

    public function allBySeasonId($seasonId)
    {
        return $this->callData('teams/season/' . $seasonId);
    }

    public function byId($teamId)
    {
        return $this->call('teams/' . $teamId);
    }

}