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
            'email' => 'required',
            'password' => 'required'
        ]);

        $fieldtype = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user_data = [
            $fieldtype => $request->input('email'),
            'password' => $request->input('password')
        ];

        $access_type = ['user' => 1, 'admin'=>0];
          
        if(Auth::attempt($user_data)){
            $access = Auth::user()->access;

            if($access == $access_type['admin']){
                return redirect('admin/index');
            }
                return redirect('dashboard/index');
        }

        

        return back()->with('msg', 'Incorrect login details');
    }
}