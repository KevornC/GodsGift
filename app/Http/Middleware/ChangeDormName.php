<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeDormName
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
        'OldDormName'=>'required | string | alpha',
        'NewDormName'=>'required | string | alpha'
      ]);
        return $next($request);
    }
}
