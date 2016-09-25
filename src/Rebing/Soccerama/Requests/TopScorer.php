<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class TopScorer extends SocceramaClient {

    public function bySeasonId($seasonId)
    {
        return $this->callData('topscorers/season/' . $seasonId);
    }

}