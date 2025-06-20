<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(): User
    {
        $user = User::factory()->create();
        return $user;
    }


    public function index(): mixed
    {
        return User::all();
    }
}
