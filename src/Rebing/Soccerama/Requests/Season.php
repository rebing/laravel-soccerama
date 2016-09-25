<?php

namespace Rebing\Soccerama\Requests;

use Rebing\Soccerama\SocceramaClient;

class Season extends SocceramaClient {

    public function all()
    {
        return $this->callData('seasons');
    }

    public function byId($seasonId)
    {
        return $this->call('seasons/' . $seasonId);
    }

    public function resultsById($seasonId)
    {
        return $this->call('seasons/results/' . $seasonId);
    }

}