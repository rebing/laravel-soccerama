<?php

namespace Rebing\Soccerama;

use GuzzleHttp\Client;

class Soccerama {

    /* @var $client Client */
    protected $client;
    protected $apiToken;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri'  => 'https://api.soccerama.pro/v1.2/',
        ]);

        $this->apiToken = config('soccerama.api_token');
        if(empty($this->apiToken))
        {
            throw new \InvalidArgumentException('No API token set');
        }
    }

}