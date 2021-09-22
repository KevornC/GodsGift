<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeMotto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      $request->validate([
        'OldDormMotto'=>'required | string | alpha',
        'NewDormMotto'=>'required | string | alpha'
      ]);
        return $next($request);
    }
}
