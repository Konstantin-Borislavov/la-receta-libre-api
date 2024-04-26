<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class SigninController extends Controller
{
    public function register(RegisterRequest $request){

        $user = User::create($request->validated());
        
    }
}
