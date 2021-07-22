<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public $successStatus = 200;




    public function show_source(request $request)
    {

        // return "ok";
        $product = User::all();
        return response()->json(['success'=>$product], $this-> successStatus); 


    }


    public function Updatedata($id)
    {
      $user = User::find($id);
      return $user;
       
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
        return "data submitted";    
        // return redirect('users');
    }


    public function updatepassword(Request $request, $id)
    {
        
    }
}
