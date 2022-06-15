<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Contorller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function save(RegisterRequest $request){
        if(Auth::check()){
            return redirect(route('user.index'));
        }

        // $validateFields = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required|email|unique:App\Models\User',
        //     'password' => 'required'
        // ]);
        
        // if(User::where('email', $validateFields['email'])->exists()){
        //     return redirect(route('user.register'))->withErrors([
        //         'email' => 'Такий акаунт вже існує'  
        //     ]);
        // }

        // $user = User::create($validateFields);
        // if($user){
        //     Auth::login($user);
        //     return redirect(route('user.private'));
        // }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        if($user){
            Auth::login($user);
            return redirect(route('user.index'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Відбулася помилка при зберіганні користувача'  
        ]);
    }
}
