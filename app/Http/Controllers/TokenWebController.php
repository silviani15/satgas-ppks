<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TokenWebController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'web_token' => 'required|string',
        ]);

        $user = Auth::user();

        if ($user) {
            Log::info('Updating web token for user ID: ' . $user->id);
            $user->web_token = $request->web_token;
            $user->save();
        } else {
            Log::error('User not authenticated');
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        return response()->json([], 201);
    }
}