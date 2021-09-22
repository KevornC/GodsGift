<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangePassword
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
        'OldPassword'=>'required',
        'password'=>'required | confirmed'
      ]);
        return $next($request);
    }
}
