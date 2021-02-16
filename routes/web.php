<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/signup', [App\Http\Controllers\HomeController::class, 'signup']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

