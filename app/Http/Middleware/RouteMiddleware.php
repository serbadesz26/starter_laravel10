<?php

namespace App\Http\Middleware;

use App\Models\Route;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routes = Route::firstWhere('route', $request->route()?->getName());

        return blank($routes) || (bool) $routes->status && $request->user()->can($routes->permission_name)
            ? $next($request)
            : redirect(RouteServiceProvider::HOME)->with('failed', 'you do not have access to this route!');
    }
}
