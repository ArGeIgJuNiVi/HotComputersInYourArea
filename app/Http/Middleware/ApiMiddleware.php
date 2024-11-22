<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ApiMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {

        $valid = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($valid->fails()) {
            return response()->json(['error' => 'email and password are required'], 400);
        }
        $credentials = $valid->validated();
        $user = User::where('email', $credentials['email'])->first();

        if ($user != null && Hash::check($credentials['password'], $user->password) && $user->role == 1) {
            return $next($request);
        }


        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
