<?php

namespace Countjr\Ipgeo;

use Countjr\Ipgeo\Exceptions\BadArgumentException;
use Countjr\Ipgeo\Exceptions\GetException;
use Countjr\Ipgeo\Services\Ipapi;

class Ipgeo
{
    private $service;

    /**
     * Ipgeo constructor.
     */
    public function __construct()
    {
        $this->service = new Ipapi();
    }

    /**
     * @param $ip
     * @return string
     * @throws BadArgumentException
     * @throws GetException
     */
    public function getLocation($ip)
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new BadArgumentException();
        }
        return $this->service->getLocation($ip);
    }
}
