<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $validated = $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);

    $token = Auth::attempt($validated);

    if (!$token) {
      return Response()->json([
        'status' => 'error',
        'message' => 'Unauthorized'
      ], 401);
    }

    $user = Auth::user();
    return Response()->json([
      'status' => 'success',
      'user' => $user,
      'authorization' => [
        'token' => $token,
        'type' => 'bearer'
      ]
    ]);
  }
}
