<?php

namespace App\Http\Controllers\Api\Rank;

use Exception;
use Validator;
use Illuminate\Http\Request;
use App\Common\Base\Controller\BaseApiController;

class RankController extends BaseApiController
{

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
        // jsonヘッダが付いていなければ400で返す
//        if (!$request->isJson()) {
//            return $this->apiFailed('not exist content-type:json', 400);
//        }

        // バリデーション
        $validator = Validator::make($request->all(), [
                'date' => 'date|after:2018-05-09',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $responseErrorMessage = '';
            foreach ($errors->all() as $message) {
                $responseErrorMessage .= "{$message}\n";
            }
            return $this->apiFailed($responseErrorMessage, 400);
        }

        $requestList = $request->all();
        // 取得処理
        try {
            $model = new Model();
            $data = $model->getRankData($requestList);

        } catch (Exception $ex) {
            logger()->channel('api')->alert("file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}");
            return $this->apiFailed();
        }

        return $this->apiSuccess($data);
    }

}
