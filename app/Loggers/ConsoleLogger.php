<?php

namespace App\Loggers;

use App\Loggers\LoggerInterface;

class ConsoleLogger implements LoggerInterface
{
    public function log(string $message) : void
    {
        echo "Console Log: " . $message . PHP_EOL;
    }
}
