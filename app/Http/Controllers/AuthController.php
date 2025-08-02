<?php

namespace App\Http\Controllers;

use BillGenerate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Pipeline;
use UserCreate;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        echo "Successfully logged in";
    }

    public function apply(Request $request)
    {

        Pipeline::send($request)
            ->through([
               UserCreate::class,
               BillGenerate::class,
            ])
            ->then(function ($request) {
                return response('Pipeline executed successfully');
            });
    }

    public function authenticate(Request $request): mixed
    {
        return response()->download();
    }
}
