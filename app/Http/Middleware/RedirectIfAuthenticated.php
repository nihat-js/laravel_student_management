<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  public function handle(Request $request, Closure $next)
  {

    if (Auth::check()) {
      return redirect()->route('dashboard'); // Replace 'dashboard' with your actual route name
    }

    return $next($request);
  }
}
