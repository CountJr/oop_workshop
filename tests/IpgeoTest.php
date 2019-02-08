<?php

namespace Countjr\Ipgeo\Tests;

use Countjr\Ipgeo\Ipgeo;
use Countjr\Ipgeo\Services\Ipapi;
use PHPUnit\Framework\TestCase;

class IpgeoTest extends TestCase
{
    public function testIpapi()
    {
        $client = new Ipapi();
        $ipgeo = new Ipgeo($client);
        $this->assertEquals(file_get_contents(__DIR__ . '/asserts/134.234.3.2'), $ipgeo->getLocation('134.234.3.2'));
    }
}
