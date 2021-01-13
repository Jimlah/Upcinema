<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(Request $request)
    {
       $user = Auth::user();
       $user_data = [
            'id' => $user->id,
            'username' => $user->username
       ];
   
       return view('welcome', $user_data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}