<?php

namespace App\Console\Commands\GetRank;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Common\Base\Controller\BaseBatchController;

class Controller extends BaseBatchController
{
    const IDENTIFIER = 'get_rank';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GetRank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '順位を取得する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->signature);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 識別子セット
        $this->setIdentifier(self::IDENTIFIER);

        $this->batchStart();

        try {
            $model = new Model();
            $model->exec();
        } catch (\Exception $ex) {
            $message = "file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}";
            static::outputLog4Batch('alert', $message);
            $this->batchFailed();
        }

        $this->batchSuccess();
    }

}
