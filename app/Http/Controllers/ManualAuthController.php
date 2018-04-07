<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ManualAuthController extends Controller
{
    // public function authenticate(Request $request){
    //     $firstname=$request->get('firstname');
    //     $surname=$request->get('surname');
    // if (Auth::attempt(['firstname' => $firstname, 'surname' => $surname])) {
    //     return redirect()->intended('admin/student');
    // }
    // }
    // public function login(){
    //     return view('student.login');
    // }

    public function __construct()
    {
        $this->middleware('auth:student');
    }
     public function index()
    {
        return view('student.index');
    }
}
