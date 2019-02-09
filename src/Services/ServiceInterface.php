<?php

namespace Countjr\Ipgeo\Services;

use Countjr\Ipgeo\Exceptions\GetException;

interface ServiceInterface
{
    /**
     * @param $ip
     * @return string
     * @throws GetException
     */
    public function getLocation($ip);
}
