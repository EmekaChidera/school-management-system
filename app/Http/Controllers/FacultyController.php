<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Http\Requests\FacultyRequest;
class FacultyController extends Controller
{
    //
    public function index(){
        $faculty=Faculty::all();
        //dd($faculty);
        return view('admin.faculty.index',compact('faculty'));

    }
    public function create(){
        return view('admin.faculty.create');
    }
    public function store(FacultyRequest $request){
        $faculty=new Faculty(array(
        'name'=>$request->get('name')
        ));
        $faculty->save();
        return redirect('/admin/faculty');
    }
}
