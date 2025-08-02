<?php

class BillGenerate
{
     public function __construct()
     {
          // Initialization code if needed
     }

     public function __invoke($user, callable $next)
     {
          // Logic to generate a bill for the user
          // For example, you might create a bill record in the database
          // Here we just simulate bill generation
          echo "Bill generated for user: " . $user->id;

          // Pass the user to the next middleware or controller
          return $next($user);
     }
}