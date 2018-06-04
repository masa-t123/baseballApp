<?php

namespace App\Http\Controllers\Api\Record\Pitcher;

use Exception;
use Illuminate\Http\Request;
use App\Common\Base\Controller\BaseApiController;

class RecordPitcherController extends BaseApiController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 成績取得API(投手)
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {

        // jsonヘッダが付いていなければ400で返す
//        if (!$request->isJson()) {
//            return $this->apiFailed('not exist content-type:json', 400);
//        }

        try {
            $model = new Model();
            $data = $model->getRecordData();
        } catch (Exception $ex) {
            logger()->channel('api')->alert("file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}");
            return $this->apiFailed();
        }

        return $this->apiSuccess($data);
    }

}
