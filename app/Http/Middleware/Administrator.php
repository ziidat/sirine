<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Administrator
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
        if(auth()->user()->privillege == "Administrator"){
            return  $next($request);
        }

        return redirect('home')->with('error',"Kamu Tidak Memiliki Akses Ini");
    }
}
