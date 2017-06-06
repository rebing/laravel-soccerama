<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Continent extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('continents/');
    }

    public function byId($continentId)
    {
        return $this->call('continents/' . $continentId);
    }

}