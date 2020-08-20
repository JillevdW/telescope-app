<?php

namespace JillevdW\TelescopeApp\Middleware;

use Closure;

class Authorize
{
    public function handle($request, Closure $next)
    {
        $authorizationToken = config('telescope-app.TELESCOPE_APP_AUTH_CODE');

        if ($authorizationToken == null)
        {
            return abort(500);
        }

        $requestToken = $request->header('telescope-app-token');

        if ($requestToken != $authorizationToken)
        {
            return abort(403);
        }

        return $next($request);
    }
}