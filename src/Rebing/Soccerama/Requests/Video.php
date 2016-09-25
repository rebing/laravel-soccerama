<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Video extends SocceramaClient {

    public function byMatchId($matchId)
    {
        return $this->callData('videos/match/' . $matchId);
    }

}