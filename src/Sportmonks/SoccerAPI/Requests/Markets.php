<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Markets extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('markets');
    }

    public function byId($marketsId)
    {
        return $this->call('markets/' . $marketsId);
    }

}