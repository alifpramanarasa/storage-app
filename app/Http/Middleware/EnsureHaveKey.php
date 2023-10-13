<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureHaveKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->header('secret_key');

        if ($key && $key === env('API_SECRET_KEY', '53C12T')) {
            return $next($request);          
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid secret key'
            ], 401);
        }
    }
}
