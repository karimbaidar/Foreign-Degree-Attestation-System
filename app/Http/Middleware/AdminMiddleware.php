<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;
use Auth;


class AdminMiddleware
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
		
		
		if ($request->user() && $request->user()->status == 3 || $request->user()->lastName == "Attestation" ||  $request->user()->lastName == "TechnicalCommittee"
			|| $request->user()->lastName == "HA" || $request->user()->lastName == "CommissionDirector" || $request->user()->lastName == "Balakarzai")
			{
				return new Response(view('unauthorized')->with('role', 'ADMIN'));
			}
		
		else
		{
			return $next($request);
			
		}
        
    }
}
