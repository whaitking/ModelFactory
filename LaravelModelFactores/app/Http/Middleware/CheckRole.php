<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user->role !== 1) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $next($request);
    }
}
