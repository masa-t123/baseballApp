<?php

namespace App\Http\Middleware;

use Closure;

class WebLogger
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
        logger()->channel('web')->debug("program start. ".implode("\t",
            [
                $request->ip(),
                $request->path(),
                $request->method(),
                $request->server("HTTP_USER_AGENT"),
            ]));

        $exec = $next($request);

        // 最後
        logger()->channel('web')->debug("program end.   ".implode("\t",
                [
                    $request->ip(),
                    $request->path(),
                    $request->method(),
                    $request->server("HTTP_USER_AGENT"),
                ]));

        return $exec;
    }
}
