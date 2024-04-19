<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', "Error: Harap login dahulu");
        }

        $r = Role::where('nama_role', $role)->first();
        if (!$r || !$request->user() || $request->user()->role_id != $r->id) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
