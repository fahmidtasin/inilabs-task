<?php

namespace App\Loggers;

interface LoggerInterface
{
    public function log(string $message): void;

}
