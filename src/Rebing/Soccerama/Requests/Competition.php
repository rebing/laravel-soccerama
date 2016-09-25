<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Competition extends SocceramaClient {

    public function all()
    {
        return $this->callData('competitions');
    }

    public function byId($competitionId)
    {
        return $this->call('competitions/' . $competitionId);
    }

}