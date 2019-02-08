#!/usr/bin/env php
<?php

namespace Countjr\Ipgeo;

use Commando\Command;
use Countjr\Ipgeo\Services\Ipapi;

require_once __DIR__ . '/../vendor/autoload.php';

$ipgeoCmd = new Command();
$ipgeoCmd->option('i')
    ->aka('ip')
    ->require()
    ->describedAs('IP address')
    ->must(function($ip) {
        return filter_var($ip, FILTER_VALIDATE_IP);
    });

if ($ipgeoCmd) {
    $client = new Ipapi();
    $ipgeo = new Ipgeo($client);
    echo $ipgeo->getLocation($ipgeoCmd['ip']);
}
