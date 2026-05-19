<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Auth as Auth;
class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $hak)
    {
        $user = Auth::user();
        if($user && Auth::user()->level_id != $hak) {
            return App::abort(403, 'Forbidden');
        }
        return $next($request);
    }
}
