<?php

use App\Models\User;
use Illuminate\Http\Request;

class UserCreate
{
     public function __construct()
     {
          
     }

     public function __invoke(Request $request, callable $next)
     {
          $user = User::create($request->all());
          // Handle the request and pass it to the next middleware or controller
          return $next($user);
     }
}