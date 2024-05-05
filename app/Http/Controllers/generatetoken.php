<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generatetoken extends Controller
{
    public function index(Request $request)
    {

        $token = $request->user()->createToken($request->token_name);
        return ['token'=> $token->plainTextToken];
    }
}

