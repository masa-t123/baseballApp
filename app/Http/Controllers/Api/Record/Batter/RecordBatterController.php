<?php

namespace App\Http\Controllers\Api\Record\Batter;

use Exception;
use Illuminate\Http\Request;
use App\Common\Base\Controller\BaseApiController;

class RecordBatterController extends BaseApiController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 成績(野手)取得コントローラ
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
