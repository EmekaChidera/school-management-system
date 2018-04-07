<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class ManualLogincontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:student', ['except'=>['logout']]);
    }
    public function showLoginForm()
    {
      return view('student.login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'firstname'   => 'required',
        'password' => 'required'
      ]);
       $check=[
            'firstname' => $request->firstname,
             'password' => $request->password
       ];
      if(Auth::guard('student')->attempt($check))
      {
          return redirect()->intended(route('student.index'));
      }else
      {
          return redirect()->back();
      }
    }
       /*{
        // if successful, then redirect to their intended location
        //dd($request->firstname);
        
      } 
      // if unsuccessful, then redirect back to the login with the form data
      //
      dd(Auth::guard('student'));
      //dd($request->password);
    }*/
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/');
    }
}
