<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Player extends SocceramaClient {

    public function byTeamAndSeasonId($teamId, $seasonId)
    {
        return $this->callData('players/team/' . $teamId . '/season/' . $seasonId);
    }

    public function byTeamId($teamId)
    {
        return $this->callData('players/team/' . $teamId);
    }

    public function byId($playerId)
    {
        return $this->callData('players/' . $playerId);
    }

}