<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loggers\ConsoleLogger;
use App\Loggers\FileLogger;

class LoggerController extends Controller
{
    public function logMessages()
    {
        $consoleLogger = new ConsoleLogger();
        $consoleLogger->log("This is a Console Log.");

        $fileLogger = new FileLogger(storage_path('logs/custom_log.txt'));
        $fileLogger->log("This is a File Log.");

        return response()->json([
            'message' => 'Logging completed. Check the console and storage/logs/custom_log.txt'
        ]);
    }
}
