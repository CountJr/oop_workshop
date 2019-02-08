<?php

namespace Countjr\Ipgeo\Services;

interface ServiceInterface
{
    /**
     * @param $ip
     * @return string
     */
    public function getLocation($ip);
}
