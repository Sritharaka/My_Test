<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sign;
use DB;
use App\Http\Requests;

class TestController extends Controller
{
    public function store(Request $request){

      $firstName = $request->input('fname');
      $lastName = $request->input('lname');
      $email =  $request->input('email');
      $country = $request->input('country');
      
     $data = array("fname"=>$firstName, "lname"=>$lastName, "email"=>$email, "country"=>$country);
     
     DB::table('signs')->insert($data);
   
     
    
     return redirect()->back() ->with('alert', 'Data Insert successfully');
    //  dd($request->all());
 
    }

    
}      
