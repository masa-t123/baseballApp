<?php
namespace App\Common\Base\Controller;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class BaseBatchController extends Command
{

    public static $identifier;

    public function __construct()
    {
        parent::__construct();
    }

    public function setIdentifier($identifier)
    {
        static::$identifier = $identifier;
    }

    public function batchStart()
    {
        static::outputLog4Batch('info', 'start');
    }

    public function batchSuccess()
    {
        static::outputLog4Batch('info', 'end');
    }

    public function batchFailed()
    {
        static::outputLog4Batch('error', 'end(Failed)');
        exit;
    }

    public static function outputLog4Batch($level, $message)
    {
        Log::channel('batch')->$level(static::$identifier. " {$message}");
    }


}