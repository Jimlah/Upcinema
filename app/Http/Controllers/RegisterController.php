<?php

namespace App\Http\Controllers;


use App\Models\RegUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request, Response $response){
        
        $user_record = new RegUsers();

        $user_record->username = $request->input('username');
        $user_record->email = $request->input('email');
        $user_record->password = $request->input('password');
        $password2 = $request->input('password2');
        $user_record->status;
        // var_dump($user_record->status); die();
        
        $validate = $this->validate($request,[
            'username' => 'required|unique:reg_users',
            'email' => 'required|unique:reg_users',
            'password' => 'same:password2|required',
        ]);
 
        $user_record->save();
        // RegUsers::create($request->all());
        // DB::insert('insert into reg_users(username,email,password,status) value(?,?,?)',[$user_record->username, $user_record->email, $user_record->password]);

        return view('/register');

    }
}
