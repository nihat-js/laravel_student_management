<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

  public function index(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    Auth::attempt();

    if (auth()->attempt($credentials)) {
      // $request->session()->regenerate();
      return response()->json(['message' => 'Successfully logged in']);
      // return redirect()->intended('/dashboard'); // Redirect to dashboard after login
    }

    throw ValidationException::withMessages([
      'email' => __('auth.failed'),
    ]);
  }
}
