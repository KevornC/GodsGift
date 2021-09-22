<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SendEmail
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
        'Email'=>'required | max: 30 | email:rfc,dns,strict,spoof',
        'Title'=>'required | max: 35',
        'Message'=>'required | min: 30'
      ]);
        return $next($request);
    }
}
