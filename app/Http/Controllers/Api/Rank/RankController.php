<?php

namespace App\Http\Controllers\Api\Rank;

use Exception;
use Illuminate\Http\Request;
use App\Common\Base\Controller\BaseApiController;

class RankController extends BaseApiController
{
    const IDENTIFIER_GET = 'get_rank';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 順位取得コントローラ
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // 識別子セット
        $this->setIdentifier(self::IDENTIFIER_GET);
        $this->apiStart();

        // jsonヘッダが付いていなければ400で返す
        if (!$request->isJson()) {
            return $this->apiFailed('not exist content-type:json', 400);
        }

        try {
            $model = new Model();
            $data = $model->getRankData();

        } catch (Exception $ex) {
            $message = "file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}";
            static::outputLog4Api('alert', $message);
            return $this->apiFailed();
        }

        return $this->apiSuccess($data);
    }

}
