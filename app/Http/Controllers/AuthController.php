<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registrationShowView(){
        return view('auth.registration');
    }
    public function registration(Request $request)
    {

        if ($request->check ==1){
            $this->validate($request, [
                'password',
                'confirm_password' => 'same:password'
            ]);
            User::create([
                'fio' => $request->fio,
                'login' => $request->login,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/');
        }else{
            return redirect('/registration');
        }
    }
    public function loginShowView(){
        return view('auth.login');
    }

    public function login(Request $request){
        Auth::attempt([
            'login'=>$request->login,
            'password'=>$request->password
        ]);
        return redirect('/');
    }
    public function logout(){
       Auth::logout();
        return redirect('/');
    }
}
