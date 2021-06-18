<?php

namespace App\Http\Middleware;

use Closure;

class HasStore
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
        if(!auth()->user()->stores()->count()) {
            return redirect()->route('store.create');
        }

        return $next($request);
    }
}
