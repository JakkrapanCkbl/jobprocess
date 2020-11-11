<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminValuer
{
   public function handle($request, Closure $next)
    {
        $IsRole = Auth::user()->roles()->pluck('name');
        if($IsRole->contains('admin')){
            return $next($request);
        }elseif($IsRole->contains('valuer')){
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
