<?php

namespace App\Http\Controllers;
use Illuminate\Session\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\userslist;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
     public function registeruser(Request $request)
    {  
      
      $nwusr =new userslist;
      $nwusr->Username=$request->input("uname");
      $nwusr->email=$request->input("email");
      $nwusr->password=md5($request->input("pwd"));
      $nwusr->token=$request->input("_token");
      $nwusr->save();
    
      return redirect('/SuccessReg')->with('response','Success');
                           
    }

    public function loginuser(Request $request)
    {  
      $nwusr =new userslist;
      $nwusr->email=$request->input("email");
      $users = DB::table('userslists')->where('email', '=',$nwusr->email )->get();
       
      if ($users->password= md5($request->input("pwd")))
     {
     
          return redirect('/')->with('response','Success');
          
      }
      else
      {
            return 'Opps Sme thing wrong happend';  
      }
      
    }

}
