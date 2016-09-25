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
    protected $withoutData;
    protected $include = [];

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

        $this->withoutData = empty(config('soccerama.without_data')) ? false : config('soccerama.without_data');
    }

    protected function call($url, $hasData = false)
    {
        $query = ['api_token' => $this->apiToken];
        if(count($this->include))
        {
            $query['include'] = $this->include;
        }

        $response = $this->client->get($url, ['query' => $query]);

        $body = json_decode($response->getBody()->getContents());

        if($hasData && $this->withoutData)
        {
            return $body->data;
        }

        return $body;
    }

    protected function callData($url)
    {
        return $this->call($url, true);
    }

    /**
     * @param $include - string or array of relations to include with the query
     */
    public function setInclude($include)
    {
        if(is_array($include))
        {
            $include = implode(',', $include);
        }

        $this->include = $include;

        return $this;
    }

}