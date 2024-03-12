<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Vehicule;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Récupérer toutes les voitures
                $vehicules = Vehicule::all();

                // Ajouter les voitures à la variable de session pour les utiliser dans la vue
                $request->session()->put('vehicules', $vehicules);

                // Rediriger vers la page d'accueil
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
    }
