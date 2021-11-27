<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChecckRole
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
        if($request->user() === null)
        {
            return redirect('/home');
        }

        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if($request->user()->hasAnyRole($roles) || !$roles)
        {
            return $next($request);

        }

        return redirect('/home');

    }
}
