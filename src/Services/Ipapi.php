<?php
/**
 * Created by PhpStorm.
 * User: ivanpetroff
 * Date: 2019-02-08
 * Time: 21:51
 */

namespace Countjr\Ipgeo\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Ipapi implements ServiceInterface
{
    private $client;

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
     */
    public function getLocation($ip)
    {
        try {
            $response = (string)$this->client->request('GET', $ip)->getBody();
        } catch (GuzzleException $e) {
            $response = '';
        }
        return $response;
    }
}