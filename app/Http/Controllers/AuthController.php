<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request){
        $request ->validate([
            'full_name' => 'required|string|max:100',
            'phone' => 'required|string|max:11',
            'email' => 'required|email|max:100',
            'login' => 'required|string|max:50',
            'password' => 'required|string|max:10',
        ]);
        $user = User::create([
            'full_name' => $request->full_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'login' => $request->login,
                'password' => Hash::make($request->password),
                
        ]);
            Auth::login($user);
            return redirect()->route('signin');
    }
    
    public function signin(Request $request){
        $request ->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
        if(Auth::attempt(['login'=>$request->login,'password'=>$request->password])){
            return redirect()->route('index');
        }else{
            return response('Неверные данные');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }
}
