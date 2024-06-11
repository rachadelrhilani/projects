<?php

namespace App\Http\Middleware;

use App\Http\Controllers\projetController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('admin_logged_in') && $request->session()->get('admin_logged_in')) {
            return $next($request);
        }

        // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié
        return redirect()->route('Déconnection');
    }
}
