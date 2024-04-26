<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        
        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        $remember = ($request->has('remember')? true : false);

        if(Auth::attempt($credentials,$remember)){
            //$request->session()->regenerate();
            return('Usuario logueado');

        }else{
            return('Usuario no registrado');
        }
    }

}
