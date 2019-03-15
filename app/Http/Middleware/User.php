<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Auth;
class User
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

        if(empty(Session::has('frontSession'))){
            return redirect('/login');
        }
        return $next($request);


        // $ip=$request->ip();
        // if ($ip=='127.0.0.1') {
        //   throw new \Exception("you are not  going good go user middleware.");

        // }

    }
}
