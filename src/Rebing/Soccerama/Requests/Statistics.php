<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Statistics extends SocceramaClient {

    public function byMatchId($matchId)
    {
        return $this->call('statistics/match/' . $matchId);
    }

}