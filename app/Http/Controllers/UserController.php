<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function show(User $user)
  {
    return response()->json(['user' => $user]);
  }

  public function store(
    Request $request,
  ) {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => Hash::make($validated['password']),
    ]);

    return response()->json([
      'status' => 'success',
      'message' => 'User created',
      'user' => $user
    ], 201);
  }

  public function update(
    Request $request,
    User $user
  ) {
    $validated = $request->validate([
      'name' => 'sometimes|required|string|max:255',
      'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
      'password' => 'sometimes|required|string|min:8|confirmed',
    ]);

    $user->update([
      'name' => $validated['name'],
      'email' => $validated['email'],
      'password' => Hash::make($validated['password']),
    ]);

    return response()->json([
      'status' => 'success',
      'message' => 'User updated',
      'user' => $user
    ], 200);
  }

  public function destroy(User $user)
  {
    $user->delete();

    return response()->json([
      'status' => 'success',
      'message' => 'User deleted',
    ], 204);
  }
}
