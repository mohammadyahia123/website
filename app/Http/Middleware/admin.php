<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
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
        $admin = $request->user();
        if($admin && $admin->name == 'admin')
        {
            return $next($request);
        }else{
            redirect('login');
        }
    }
}
