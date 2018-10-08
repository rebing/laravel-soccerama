<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Squad extends SoccerAPIClient {

    public function byTeamAndSeason($teamId, $seasonId)
    {
        return $this->callData("squad/season/{$seasonId}/team/{$teamId}");
    }

}