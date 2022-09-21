<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class TVStation extends SoccerAPIClient {

    public function byMatchId($id)
    {
        return $this->call('tvstations/fixture/' . $id);
    }
}