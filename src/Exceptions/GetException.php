<?php
/**
 * Created by PhpStorm.
 * User: ivanpetroff
 * Date: 2019-02-09
 * Time: 08:23
 */

namespace Countjr\Ipgeo\Exceptions;

class GetException extends \Exception
{
    public function __construct(\Exception $e)
    {
        parent::__construct('Error getting data from service', 404, $e->getPrevious());
    }
}
