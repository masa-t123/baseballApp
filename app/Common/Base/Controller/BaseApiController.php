<?php
namespace App\Common\Base\Controller;

use App\Http\Controllers\Controller;
use Log;
use Request;

class BaseApiController extends Controller
{
    public static $identifier;

    public function __construct()
    {

    }

    /**
     * 識別子セット
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        self::$identifier = $identifier;
    }

    /**
     * API開始ログ出力
     */
    public function apiStart()
    {
        self::outputLog4Api('info', 'start');
    }

    /**
     * API成功
     * @param $responseData
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSuccess($responseData, $status=200)
    {
        self::outputLog4Api('info', 'end');
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
        self::outputLog4Api('error', "end(Failed) status:{$status}");

        $responseData = [
            'error' => [
                'message' => (strlen($message) > 0 ? $message : 'Internal Server Error'),
            ],
        ];
        return response()->json($responseData, $status);

    }

    /**
     * ログ出力
     * @param $level
     * @param $message
     */
    public static function outputLog4Api($level, $message)
    {
        Log::channel('api')->$level(self::$identifier   . " " .
                                    Request::ip()       . " " .
                                    Request::fullUrl()  . " " .
                                    $message);
    }

}
