<?php

namespace App\Http\Middleware;

use Closure;
    use Auth;

class IsRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
        {
         
            if(!Auth::check() or $request->user()->role!='admin') {
                return redirect()->route('login');      // thường ta sẽ chuyển hướng tới trang login 
            }
            return $next($request);          // chấp nhận request 
        }

}

