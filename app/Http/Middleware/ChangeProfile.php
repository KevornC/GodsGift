<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeProfile
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
      'LOR'=>'required',
      'OldEmail'=>'required | max:30 | email:rfc,dns,strict,spoof',
      'NewEmail'=>'required | max:30 | email:rfc,dns,strict,spoof',
    ]);
        return $next($request);
    }
}
