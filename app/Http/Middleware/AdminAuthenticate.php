<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;


use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate extends Middleware
{
  protected function redirectTo(Request $request): ?string
  {
    return $request->exceptsJason() ? null : route("admin/login");
  }
  protected function autheticate( $request, array $guards )
  {
    if ($this->Auth->guard('admin')->check()) {
        return $this->Auth->shouldUse('admin');
  }
  $this->unauthenticated($request, ['admin']); 
}
}
  




