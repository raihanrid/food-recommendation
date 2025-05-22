<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Google_Client;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callback(Request $request)
    {
        $idToken = $request->input('credential');
        $client = new Google_Client(['client_id' => env('GOOGLE_CLIENT_ID')]);
        $payload = $client->verifyIdToken($idToken);
        if ($payload) {
            return response()->json($payload);
            // buat atau login user
        } else {
            return response()->json(['error' => 'Invalid token'], 401);
        }
    }
}
