<?php

namespace Countjr\Ipgeo\Services;

class Dummy implements ServiceInterface
{
    public function __construct()
    {
        //
    }

    public function getLocation($ip)
    {
            return file_get_contents(__DIR__ . '/../../tests/asserts/134.234.3.2');
    }
}
