<?php

namespace Countjr\Ipgeo\Exceptions;

class BadArgumentException extends \Exception
{
    public function __construct()
    {
        {
            parent::__construct('Bag argument', 400);
        }
    }
}
