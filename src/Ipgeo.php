<?php
declare(strict_types=1);

namespace Countjr\Ipgeo;

use Countjr\Ipgeo\Exceptions\BadArgumentException;
use Countjr\Ipgeo\Exceptions\GetException;
use Countjr\Ipgeo\Services\Ipapi;
use Countjr\Ipgeo\Services\ServiceInterface;

class Ipgeo
{
    private $service;

    /**
     * Ipgeo constructor.
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service = null)
    {
        $this->service = $service ?? new Ipapi();
    }

    /**
     * @param $ip
     * @return mixed
     * @throws BadArgumentException
     * @throws GetException
     */
    public function getLocation($ip)
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new BadArgumentException();
        }
        return json_decode($this->service->getLocation($ip));
    }
}
