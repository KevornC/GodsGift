<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Register
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
      'Firstname'=>'required | string | max:20 | alpha',
      'Lastname'=>'required | string | max:20 | alpha',
      'Gender'=>'required',
      'LOR'=>'required',
      'dormNum'=>'required | numeric | min:1 | max:12',
      'Email'=>'required | max:30 | min:10 | email:rfc,dns,strict,spoof',
      'password'=>'required | confirmed | min:8',
      'Terms'=>'accepted | required',
      'photo'=>'required'
    ]);
        return $next($request);
    }
}
