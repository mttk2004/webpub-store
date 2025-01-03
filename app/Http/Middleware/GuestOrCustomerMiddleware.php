<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;


class GuestOrCustomerMiddleware
{
	public function handle(Request $request, Closure $next)
	{
		if (auth()->guest() || (auth()->check() && auth()->user()->role === 'customer')) {
			return $next($request);
		}
		
		abort(403);
	}
}
