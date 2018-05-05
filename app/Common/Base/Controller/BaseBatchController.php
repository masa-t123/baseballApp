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
        self::$identifier = $identifier;
    }

    public function batchStart()
    {
        self::outputLog4Batch('info', 'start');
    }

    public function batchSuccess()
    {
        self::outputLog4Batch('info', 'end');
    }

    public function batchFailed()
    {
        self::outputLog4Batch('error', 'end(Failed)');
        exit;
    }

    public static function outputLog4Batch($level, $message)
    {
        Log::channel('batch')->$level(self::$identifier. " {$message}");
    }


}