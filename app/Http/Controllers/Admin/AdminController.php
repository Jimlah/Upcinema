<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $user_data = [
            'id' => $user->id,
            'username' => $user->username
        ];
        return view('admin/index', $user_data);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
