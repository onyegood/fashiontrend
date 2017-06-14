<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer
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
        $user = Auth::user();

                if ($user){
                    foreach ($user->roles as $role) {
                        //
                        if ($role->name == "customer") {
                            return $next($request);
                        }
                    }
                }

        return response('Unauthorized.', 401);
    }
}
