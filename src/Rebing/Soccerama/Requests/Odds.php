<?php

namespace Rebing\Soccerama\Requests;

use Carbon\Carbon;
use Rebing\Soccerama\SocceramaClient;

class Odds extends SocceramaClient {

    public function byMatchId($matchId)
    {
        return $this->callData('odds/match/' . $matchId);
    }

    public function byMatchAndBookmakerId($matchId, $bookmakerId)
    {
        return $this->callData('odds/match/' . $matchId . '/bookmaker/' . $bookmakerId);
    }

    public function byBookmakerAndDate($bookmakerId, $date)
    {
        if($date instanceof Carbon)
        {
            $date = $date->format('Y-m-d');
        }

        return $this->callData('odds/bookmaker/' . $bookmakerId . '/date/' . $date);
    }

}