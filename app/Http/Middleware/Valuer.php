<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Valuer
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
        
        $IsRole = Auth::user()->roles()->pluck('name');
        if($IsRole->contains('valuer')){
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
