<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Commentary extends SocceramaClient {

    public function byMatchId($matchId)
    {
        return $this->callData('commentaries/match/' . $matchId);
    }

}