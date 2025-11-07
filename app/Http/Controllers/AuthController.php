<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $creds = $request->validate([
            'email'=> ['required','email'],
            'password'=>['required']
        ]);

        if(!Auth::attempt($creds)){
            return response()->json(['message'=>'Invalid credentials'],401);
        }
        // @var \App\Models\User $user
        $user = Auth::user();
        $token = $user->createToken('admin-token')->plainTextToken;

        return response()->json([
            'token'=> $token,
            'user'=>$user
        ]);

    }
}
