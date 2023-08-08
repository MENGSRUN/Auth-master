<?php

namespace App\Http\Controllers;

use App\Models\TblUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function authenticate(REQUEST $request)
    {
        // validate user login info
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:12',
        ]);

        $username = $request->username;
        $password = $request->password;

        $user = TblUser::where('username', $username)->first();
        if (!$user) {
            return redirect()
                ->back()
                ->withInput($request->only('username'))
                ->withErrors([
                    'username' => 'Username not found!',
                ]);
        }

        if($user->passwd !== $password){
            return redirect()
                ->back()
                ->withInput($request->only('password'))
                ->withErrors([
                    'password' => 'Incorrect Password!',
                ]);
        }
        $request->session()->put(config('global.TOKEN'), $user->token);
        
        return redirect()->route('dashboard');
    }
    function logout(){
        session()->forget(config('global.TOKEN'));
        // Cookie::queue(Cookie::forget(config('global.REM-TOKEN')));
        // Cookie::queue(Cookie::forget(config('global.AUTH-TOKEN')));
        return redirect()->route('login');
    }
}
