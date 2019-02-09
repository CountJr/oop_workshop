<?php

namespace Countjr\Ipgeo\Services;

use Countjr\Ipgeo\Exceptions\GetException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Ipapi implements ServiceInterface
{
    private $client;

    /**
     * Ipapi constructor.
     */
    public function __construct()
    {
        //
        $this->client = new Client([
            'base_uri' => "http://ip-api.com/json/",
        ]);
    }

    /**
     * @param $ip
     * @return string
     * @throws GetException
     */
    public function getLocation($ip)
    {
        try {
            $response = (string)$this->client->request('GET', $ip)->getBody();
        } catch (GuzzleException $e) {
            throw new GetException($e);
        }
        return $response;
    }
}
