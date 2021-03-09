<?php

namespace App\Http\Middleware;

use Closure;

class date
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        return dd(date('l'));

        if(date('l') === 'Saturday') return dd(date('l'));
        if(date('l') === 'Monday') return dd('today is Monday');
        return $next($request);
    }
}
