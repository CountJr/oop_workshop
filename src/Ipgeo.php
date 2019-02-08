<?php

namespace Countjr\Ipgeo;

use Countjr\Ipgeo\Services\ServiceInterface;

class Ipgeo
{
    private $service;

    /**
     * Ipgeo constructor.
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service)
    {
        // initialise service
        $this->service = $service;
    }

    /**
     * @param $ip
     * @return string
     */
    public function getLocation($ip)
    {
        return $this->service->getLocation($ip);
    }
}
