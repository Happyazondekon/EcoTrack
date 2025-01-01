<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Assuming you have a role checking logic in your User model, like:
        // hasRole('admin') or hasRole('auteur')

        if (! $request->user() || ! in_array($request->user()->role->nom, $roles)) {
            // If user does not have the role, deny access
            return redirect()->route('home');
        }

        return $next($request);
    }
}
