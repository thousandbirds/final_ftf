<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Contorller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signin(LoginRequest $request){
        if(Auth::check()){
            return redirect()->intended(route('user.index'));    
        }

        $user = $request->only(['email', 'password']);
        
        if(Auth::attempt($user)) {
            return redirect()->intended(route('user.index'));
        }
        

        // return redirect()->route('user.login')->withErrors([
        //     'email' => 'Не вдалося авторизуватися'
        // ]);
    }
}