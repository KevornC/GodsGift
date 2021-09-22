<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login
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
        'Email'=>'required | min:10 | email:rfc,dns,strict,spoof',
        'password'=>'required | min: 8',
      ]);
        return $next($request);
    }
}
