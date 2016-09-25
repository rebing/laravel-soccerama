<?php

namespace Rebing\Soccerama\Requests;


use Rebing\Soccerama\SocceramaClient;

class Country extends SocceramaClient {

    public function all()
    {
        return $this->callData('countries');
    }

    public function byId($countryId)
    {
        return $this->call('countries/' . $countryId);
    }

}