<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Stage extends SoccerAPIClient {

    public function byId($stageId)
    {
        return $this->call('stages/' . $stageId);
    }

    public function bySeasonId($seasonId)
    {
        return $this->call('stages/season/' . $seasonId);
    }

}