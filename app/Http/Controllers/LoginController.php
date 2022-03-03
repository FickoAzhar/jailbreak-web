<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title'=>"Login",
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect('/dashboard');
            }else{
                return redirect('/');
            }
        }else{
            return back()->with('loginError','Login Failed!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
