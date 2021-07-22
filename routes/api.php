<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usersdata', function(){
    return "Hello i am here";
});


Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@create');                                //Route fro register
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');                                       //Route For Login
// Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logoutdata');                              // Route to Logout
Route::get('/show', 'App\Http\Controllers\DataController@show_source');                                         //route for Show user data
Route::get('/userdata/{id}', 'App\Http\Controllers\DataController@Updatedata');                                 // Route for user id data
Route::post('/save_edit_data/{id}', 'App\Http\Controllers\DataController@posteditdata');                        //route to save updated data
Route::post('/newuser', 'App\Http\Controllers\HomeController@submituserdata');                                  // Route to add new user
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');                                     //Route to Logout
Route::post('/change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password'); //Route to Change Password
 



Route::get('/new', 'App\Http\Controllers\HomeController@new');