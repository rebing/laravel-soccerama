<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Standings extends SocceramaClient {

    public function bySeasonId($seasonId)
    {
        return $this->callData('standings/season/' . $seasonId);
    }

}