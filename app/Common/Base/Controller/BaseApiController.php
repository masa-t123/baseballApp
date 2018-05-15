<?php
namespace App\Common\Base\Controller;

use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{

    public function __construct()
    {

    }

    /**
     * API成功
     * @param $responseData
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSuccess($responseData, $status=200)
    {
        return response()->json($responseData, $status);
    }

    /**
     * API失敗
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiFailed($message='', $status=500)
    {
        $responseData = [
            'error' => [
                'message' => (strlen($message) > 0 ? $message : 'Internal Server Error'),
            ],
        ];
        return response()->json($responseData, $status);

    }

}
