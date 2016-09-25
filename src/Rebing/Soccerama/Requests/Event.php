<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Event extends SocceramaClient {

    public function byMatchId($matchId)
    {
        return $this->callData('events/match/' . $matchId);
    }

}