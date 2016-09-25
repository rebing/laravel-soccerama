<?php

namespace Rebing\Soccerama\Requests;


use Carbon\Carbon;
use Rebing\Soccerama\SocceramaClient;

class Match extends SocceramaClient {

    /**
     * Accepts dates as Carbon or 'YYYY-mm-dd' strings
     */
    public function byDate($fromDate, $toDate)
    {
        if($fromDate instanceof Carbon)
        {
            $fromDate->format('Y-m-d');
        }
        if($toDate instanceof Carbon)
        {
            $toDate->format('Y-m-d');
        }

        return $this->callData('matches/' . $fromDate . '/' . $toDate);
    }

    public function byId($matchId)
    {
        return $this->call('matches/' . $matchId);
    }

}