<?php

namespace Jocs\Util;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Monolog\Level;

class LogFactory
{
    public static function getLogger(string $canal = "ofegat") : LoggerInterface
    {
        $log = new Logger($canal);
        $log->pushHandler(new StreamHandler("logs/ofegat.log", Level::Info));

        return $log;
    }
}
