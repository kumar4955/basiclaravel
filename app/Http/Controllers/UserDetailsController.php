<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;


class UserDetailsController extends Controller
{
    function index(){



    }
     function create(){
    return view('User_details.create');
    
        
    }
 public function datasubmit(Request $request){
  UserDetails::create($request->all());
  print_r($request->input());
            
        }
        
}


