<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    public function show()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user_data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        
        
        if(Auth::attempt($user_data)){
            return redirect('dashboard');
        }

        return back()->with('msg', 'Incorrect login details');
    }
}