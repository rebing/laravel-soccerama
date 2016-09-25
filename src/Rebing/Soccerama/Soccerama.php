<?php

namespace Rebing\Soccerama;

use GuzzleHttp\Client;
use Rebing\Soccerama\Requests\Competition;
use Rebing\Soccerama\Requests\Match;

class Soccerama {

    use Competition, Match;

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

    protected function get($url, array $queryParams = [])
    {
        $query = array_merge($queryParams, ['api_token' => $this->apiToken]);

        $response = $this->client->get($url, ['query' => $query]);

        return json_decode($response->getBody()->getContents());
    }

}