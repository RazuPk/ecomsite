<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('loggedInUser') && $request->path() != '/' && $request->path() != '/register') {
            return redirect('/');
        }
        if ($request->session()->has('loggedInUser') && $request->path() == '/' || $request->path() == '/register') {
            return back();
        }
        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        return $response;
    }
}
