<?php

namespace Countjr\Ipgeo\Tests;

use Countjr\Ipgeo\Exceptions\BadArgumentException;
use Countjr\Ipgeo\Ipgeo;
use Countjr\Ipgeo\Services\Ipapi;
use PHPUnit\Framework\TestCase;

class IpgeoTest extends TestCase
{
    public function testIpapi()
    {
//        $client = new Ipapi();
        $ipgeo = new Ipgeo();
        $assert = file_get_contents(__DIR__ . '/asserts/134.234.3.2');
        $this->assertEquals($assert, $ipgeo->getLocation('134.234.3.2'));
    }

    public function testBadRequestException()
    {
        //
        $ipgeo = new Ipgeo();
        $this->expectException(BadArgumentException::class);
        $ipgeo->getLocation('2344.111.2');
    }
}
