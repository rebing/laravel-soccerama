<?php

namespace Rebing\Soccerama\Requests;

trait Competition {

    public function competitions()
    {
        return $this->get('competitions')->data;
    }

    public function competitionById($competitionId)
    {
        return $this->get('competitions/' . $competitionId);
    }

}