<?php
/**
 * Created by PhpStorm.
 * User: ivanpetroff
 * Date: 2019-02-08
 * Time: 21:51
 */

namespace Countjr\Ipgeo\Services;


interface ServiceInterface
{
    /**
     * @param $ip
     * @return string
     */
    public function getLocation($ip);
}