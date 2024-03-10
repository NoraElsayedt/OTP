<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Twofator
{
    
    public function handle(Request $request, Closure $next): Response
    {


        $user = auth()->user();

        if(auth()->check() && $user->code){
           

            if( !$request->is('otp')){
                return redirect()->route('otp.index');

            }

        }
 

        return $next($request);
    }
}
