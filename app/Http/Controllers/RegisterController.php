<?php

namespace App\Http\Controllers;

use App\Models\reg_users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    } 

    public function register(){

        $user_record = new reg_users();

        $user_record->name = request('username');
        $user_record->email = request('email');
        $user_record->password = request('password');
        $user_record->password2 = request('password2');

        var_dump($user_record);
        die();
        return redirect('/');
    }
}
