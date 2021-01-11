<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function(){
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/forgetpass', function () {
        return view('forgetpass');
    });
});

// users route
Route::group([], function(){

    // Route::get('/dashboard/index', function(){
    //     return view('dashboard/index');
    // });

    Route::get('/dashboard/index', [MainController::class, 'index']);
});