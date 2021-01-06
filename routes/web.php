<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'Wake',
        'Pray',
        'Eat',
        'Sleep'
    ];


    return view('welcome', [
        'tasks' => $tasks,
        'title' => request('title')
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group([], function(){
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', function () {
        return view('login');
    });
    
    Route::get('/forgetpass', function () {
        return view('forgetpass');
    });
});

