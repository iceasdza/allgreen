<?php

namespace App\Http\Middleware;

use Closure;
use App\adminLogin;
use Illuminate\Http\Request;
use Auth;
class checkUser
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
            if(Auth::check()){
                 return $next($request);
                // return  redirect('safety-upload');
                // dd('checked');
            }else{
                return  redirect('/');
            }
        return $next($request);
    }
}
