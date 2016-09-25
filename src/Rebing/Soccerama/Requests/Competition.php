<?php

namespace Rebing\Soccerama\Requests;

trait Competition {

    public function competitions()
    {
        return $this->callData('competitions');
    }

    public function competitionById($competitionId)
    {
        return $this->call('competitions/' . $competitionId);
    }

}