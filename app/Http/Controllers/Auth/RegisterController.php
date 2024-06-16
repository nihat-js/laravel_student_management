<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function index(Request $request)
  {
    // $request->validate([
    //  'username' => ['required', 'string', 'max:255', 'unique:users'],
    // 'name' => ['required', 'string', 'max:255'],
    // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //  'password' => ['required', Password::defaults()],
    // ]);


    // $x = $request->session()->all();
    // var_dump($x);
    // die;
    $user = User::create([
      'name' => $request->input("name"),
      'email' => $request->input("email"),
      'password' => Hash::make($request->input("password")),
    ]);

    Auth::login($user);

    // var_dump($user);

    // 

    //  Auth::login($)

    return response()->json(['message' => 'User registered successfully'], 201);
  }
}
