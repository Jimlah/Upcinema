<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\App\Http\Middleware;

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

Route::get('/contact', function(){
    return view('contact');
});

Route::middleware('auth_user')->get('/', function () {
    return view('welcome');
});

Route::middleware('auth_user')->group(function(){
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/forgetpass', function () {
        return view('forgetpass');
    });
});

// users route
Route::middleware('check')->group(function(){
    Route::get('/dashboard/index', [MainController::class, 'index']);
    Route::get('/logout', [MainController::class, 'logout']);
});