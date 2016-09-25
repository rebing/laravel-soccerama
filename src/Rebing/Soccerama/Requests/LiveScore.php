<?php

namespace Rebing\Soccerama\Requests;

use Carbon\Carbon;

trait LiveScore {

    public function livescoreByDate($date)
    {
        if($date instanceof Carbon)
        {
            $date = $date->format('Y-m-d');
        }

        return $this->call('livescore/date/' . $date);
    }

}