<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\Auth\RegisterController ;
use App\Http\Controllers\Auth\LoginController ;
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
    return view('welcome');
});

Route::get('/test' ,function  () {
    return ("hello");
}
);


Route::post('register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/usersdata', function(){
    return User::all();
});



//  Auth::routes();

 //Email Verification route Start
//  Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');


// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('admin/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');



// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/profile', function () {
//     // Only verified users may access this route...
// })->middleware('verified');

//Email Verification End 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', 'App\Http\Controllers\HomeController@adminHome')->name('admin.home')->middleware('is_admin');


// route to show user data
Route::get('users','App\Http\Controllers\HomeController@show_user_data');

// route to edit user data
Route::get('/edit-user/{id}','App\Http\Controllers\HomeController@update');
Route::post('/submit/{id}','App\Http\Controllers\HomeController@posteditdata');

//route to add new user by admin
Route::get('addnewuser','App\Http\Controllers\HomeController@addnewuser');
Route::post('submited','App\Http\Controllers\HomeController@submituserdata');

//route for user profile
Route::get('admin/profile_user/{id}','App\Http\Controllers\HomeController@user_profile');
Route::post('/submitprofile/{id}','App\Http\Controllers\HomeController@postprofiledata');


