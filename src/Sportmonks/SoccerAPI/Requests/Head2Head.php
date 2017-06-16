<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Head2Head extends SoccerAPIClient {

    public function betweenTeams($team1Id,$team2Id)
    {
        return $this->callData('head2head/' . $team1Id . '/' . $team2Id);
    }

}