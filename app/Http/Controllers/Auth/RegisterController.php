<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    public $successStatus = 200;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'fname' => ['required', 'string', 'max:255'],
        //     'lname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phone' => ['required', 'string'],
        //     'pincode' => ['required', 'string'],
        //     'city' => ['required', 'string'],
        //     'state' => ['required', 'string'],
        //     'country' => ['required', 'string'],
        // ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {

        // return ($request);
        
  
        $member = new User();
        $member ->fname=$request->fname;
        $member ->lname=$request->lname;
        $member ->email=$request->email;
        $member ->password=Hash::make($request['password']);
        $member ->phone=$request->phone;
        $member ->pincode=$request->pincode;
        $member ->city=$request->city;
        $member ->state=$request->state;
        $member ->country=$request->country;
        
        $member ->save();
        echo "Data Submitted";
    }
}
