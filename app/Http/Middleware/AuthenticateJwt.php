<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateJwt
{
    public function handle($request, Closure $next)
    {
        
        try {
            $user = JWTAuth::setToken(str_replace('Bearer ', '', $request->header('Authorization')))->authenticate();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => 'Invalid token'], 401);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['error' => 'Token expired'], 401);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        $request->user = $user;

        return $next($request);
    }
}
