<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
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
        $user = Auth::user();

        if($user){
            if($user->access == 1){
                return redirect('dashboard/index');
            }
        }
        
        if($user){
            if($user->access == 0){
                return redirect('admin/index');
            }
        }

        return $next($request);
    }
}
