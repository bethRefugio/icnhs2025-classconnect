<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
      //$auth_user = Auth::user();
      $auth_user = User::with('account')->find(Auth::id());
      $auth_user_role = strtolower(trim($auth_user->account->name));

      $role = explode('|',$role);
      if (!in_array($auth_user_role, $role)) {
        abort(403, "Cannot access to restricted page");
        //return Redirect::to('home');
      } else {
        return $next($request);
      }

      return $next($request);
    }
}
