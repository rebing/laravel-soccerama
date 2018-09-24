<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Venue extends SoccerAPIClient {

    public function byId($venueId)
    {
        return $this->call('venues/' . $venueId);
    }

}