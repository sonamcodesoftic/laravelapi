<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\CursorPaginator;


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
    public function show_user_data(request $request)
    {
        return "ok";
        // $user = User::all();
        // $user = DB::table('users')->orderBy('id')->cursorPaginate(10);
        return User::all();
        // return view('user',compact('user'));
        // return "There YOu Go"; 
    }

    // Function to update user data BY admin start
    public function update($user_id)
    { 
       $user = User::find($user_id);
       return view('user_update',compact('user'));
    }
    public function posteditdata(request $request,$id)
    {  
        $member = User::find($id);
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
        return redirect('users');
    }
    // Function to update user data BY admin End


    //Function to add new user start
    public function addnewuser(Request $request)
    {
      return view('addnewuser');
    }
    public function submituserdata(Request $request)
    {
             User::create([
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
        return redirect('users');
    }
    //Function to add new user End

    //function to user profile Start
    public function user_profile($id)
    {
        // return view('profile');
        $user = User::find($id);
       return view('profile',compact('user'));
    }

    public function postprofiledata(request $request,$id)
    {  
        $member = User::find($id);
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
        return redirect()->route('home')
        ->with('error','your data Changed successfully ');

    }

    public function new()
    {
        return"hello sonam is crying" ;
    }
   //functio to user proflie end
}
