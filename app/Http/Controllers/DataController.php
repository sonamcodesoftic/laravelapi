<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DataController extends Controller
{
    public $successStatus = 200;




    public function show_source(request $request)
    {

        // return "ok";
        $product = User::all();
        return response()->json(['success'=>$product], $this-> successStatus); 


    }
}
