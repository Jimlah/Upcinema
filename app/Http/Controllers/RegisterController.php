<?php

namespace App\Http\Controllers;


use App\Models\RegUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('/register');
    }

    public function register(Request $request, Response $response)
    { 
        $user_record = new RegUsers();
        $user_record->username = $request->input('username');
        $user_record->email = $request->input('email');
        $user_record->password = Hash::make($request->input('password'));
        $password2 = $request->input('password2');
        
        $this->validate($request,[
            'username' => 'required|unique:reg_users',
            'email' => 'required|unique:reg_users',
            'password' => 'same:password2|required',
        ]);
 
        $user_record->save();
    
        return redirect('/login')->with('mssg', 'Registration successful. Please login to continue');

    }
}
