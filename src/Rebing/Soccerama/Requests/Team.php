<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Team extends SocceramaClient {

    public function allBySeasonId($seasonId)
    {
        return $this->callData('teams/season/' . $seasonId);
    }

    public function byId($teamId)
    {
        return $this->call('teams/' . $teamId);
    }

    public function bySeasonId($teamId, $seasonId)
    {
        return $this->call('teams/' . $teamId . '/season/' . $seasonId);
    }

}