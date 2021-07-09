<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth'], ['verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        return view('adminHome');
    }

    //Funcction to Show users data to admin
    public function show_user_data(Request $request)
    {
        // return view('user');
        $user = User::all();
        return view('user',compact('user'));
    }

    // Function to update user data BY admin start
    public function update($user_id)
    { 
       //return view('students/update'); 
       $user = User::find($user_id);
       return view('user_update',compact('user'));
    }
    public function posteditdata(request $request,$id)
    {      
        $member = User:: find($id);
        //  dd($member);
        $member ->fname=$request->fname;
        $member ->lname=$request->lname;
        $member ->email=$request->email;
        $member ->phone=$request->phone;
        $member ->city=$request->city;
        $member ->state=$request->state;
        $member ->country=$request->country;
        $member ->pincode=$request->pincode;
        $member ->nationality=$request->nationality;
        $member ->date_of_birth=$request->date_of_birth;
        $member ->userrole=$request->userrole;
        $member ->status=$request->status;
        $member ->gender=$request->gender;
        $member->save();
        return redirect()->route('/users');
    }
    // Function to update user data BY admin End

    //Function to add new user start
    public function addnewuser(Request $request)
    {
      return view('addnewuser');
    }

    public function submituserdata(Request $request)
    {
        
        //  dd($member);
        return User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'pincode' => $request['pincode'],
            'city' => $request['city'],
            'state' => $request['state'],
            'country' => $request['country'],
            // 'pincode' => $request['pincode'],
            // 'nationality' => $request['nationality'],
            // 'gender' => $request['gender'],
            // 'date_of_birth' => $request['date_of_birth'],
            // 'userrole' => $request['userrole'],
            // 'status' => $request['status'],    
        ]);
        return redirect()->route('users');
    }
    //Function to add new user End



}
