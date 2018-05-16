<?php

namespace App\Http\Middleware;

use Closure;

class ApiLogger
{

    const PROGRAM_STAGE_START = 'program start. ';
    const PROGRAM_STAGE_END   = 'program end.   ';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $this->outputLog($request, self::PROGRAM_STAGE_START);

        $exec = $next($request);

        $this->outputLog($request, self::PROGRAM_STAGE_END);

        return $exec;
    }

    /**
     * ログ出力
     * @param $request
     * @param $stage
     */
    private function outputLog($request, $stage)
    {
        logger()->channel('api')->debug($stage.implode("\t",
                [
                    $request->ip(),
                    $request->method(),
                    $request->path(),
                    json_encode($request->all()),
                ]));
    }

}
