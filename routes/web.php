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
// Route::post('/manage_gig', function () {
//     return view('check');
// });

Route::get('/home', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/signup', [App\Http\Controllers\HomeController::class, 'signup']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/categories/{name}', [App\Http\Controllers\HomeController::class, 'single_cat']);

//User Options
Route::get('/bookmarks', [App\Http\Controllers\UserController::class, 'bookmarks']);
Route::get('/buyer_request', [App\Http\Controllers\UserController::class, 'buyer_request']);
Route::get('/create_job', [App\Http\Controllers\UserController::class, 'create_job']);
Route::post('/create_job', [App\Http\Controllers\UserController::class, 'create_job_save']);
Route::get('/inbox', [App\Http\Controllers\UserController::class, 'inbox']);
Route::get('/manage_order', [App\Http\Controllers\UserController::class, 'manage_order']);
Route::get('/myjobs', [App\Http\Controllers\UserController::class, 'myjobs']);
Route::get('/myrequests', [App\Http\Controllers\UserController::class, 'myrequests']);
Route::get('/orders', [App\Http\Controllers\UserController::class, 'orders']);
Route::get('/payment', [App\Http\Controllers\UserController::class, 'payment']);
Route::get('/post_request', [App\Http\Controllers\UserController::class, 'post_request']);
Route::post('/post_request', [App\Http\Controllers\UserController::class, 'post_request_save']);
Route::get('/settings', [App\Http\Controllers\UserController::class, 'settings']);
Route::post('/settings', [App\Http\Controllers\UserController::class, 'settings_save']);
Route::get('/user/{name}', [App\Http\Controllers\UserController::class, 'profile']);
Route::get('/balance', [App\Http\Controllers\UserController::class, 'balance']);
Route::get('/purchases', [App\Http\Controllers\UserController::class, 'purchases']);
Route::post('/manage_gig/{status}', [App\Http\Controllers\UserController::class, 'manage_gig']);
Route::get('/sendoffer/{id}', [App\Http\Controllers\UserController::class, 'sendoffer']);
Route::post('/sendoffer/{id}', [App\Http\Controllers\UserController::class, 'sendoffer_save']);
Route::get('/buyer_req/{cat}', [App\Http\Controllers\UserController::class, 'buy_req_cat']);
Route::get('/myrequest_del/{req_id}', [App\Http\Controllers\UserController::class, 'myrequest_del']);





Auth::routes();

