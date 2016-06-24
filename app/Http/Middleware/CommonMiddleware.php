<?php

namespace App\Http\Middleware;

use Closure;

class CommonMiddleware
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
//        $userInfo = '';
//        $userInfo['ip'] = $request->getClientIp();
//        $userInfo['language'] = $request->capture()->getPreferredLanguage();
//        $userInfo['userAgent'] = $request->server->get('HTTP_USER_AGENT');
//        $userInfo['referer'] = $request->server->get('HTTP_REFERER');

        return $next($request);
    }
}
