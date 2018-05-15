<?php

namespace App\Http\Middleware;

use Closure;

class ApiLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 最初
        logger()->channel('api')->debug("program start. ".implode("\t",
                [
                    $request->ip(),
                    $request->method(),
                    $request->path(),
                    json_encode($request->all()),
                ]));

        $exec = $next($request);

        // 最後
        logger()->channel('api')->debug("program end.   ".implode("\t",
                [
                    $request->ip(),
                    $request->method(),
                    $request->path(),
                    json_encode($request->all()),
                ]));

        return $exec;
    }
}
