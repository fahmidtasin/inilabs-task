<?php

namespace App\Loggers;

use App\Loggers\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function log(string $message) : void
    {
        file_put_contents($this->filename, "File Log: " . $message . PHP_EOL, FILE_APPEND);
    }
}
