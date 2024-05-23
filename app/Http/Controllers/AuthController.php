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
        'message' => 'Usuário não existe!'
      ], 401);
    }

    $user = Auth::user();
    $expiresIn = auth('api')->payload()->get('exp');

    return Response()->json([
      'status' => 'success',
      'message' => 'Usuário criado e JWT encontrado',
      'tokenjwt' => $token,
      'expires' => \Carbon\Carbon::createFromTimestamp($expiresIn)->toDateString(),
      'tokenmsg' => 'use o token para acessar os endpoints!',
      'user' => $user,
    ]);
  }
}
