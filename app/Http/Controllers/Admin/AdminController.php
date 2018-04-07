<?php

namespace App\Http\Controllers\Admin;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\People;
use App\Http\Requests\StudentRequest;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TeacherIndex()
    {
        return view("admin.teachers.index");
    }


    public function StudentIndex()
    {
        $students=Student::all();
        //dd($students);
        return view("admin.students.index",compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TeacherCreate()
    {
        return view('admin.teachers.create');
    }

     public function StudentCreate()
    {
        return view('admin.students.create');
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illumie\Http\Response
     */
    public function StudentStore(StudentRequest $request)
    {
        $count=Student::count();
        $count += 1;
        $reg="1028".$count;
        $students=new Student(array(
            'surname'=>$request->get('surname'),
            'firstname'=>$request->get('firstname'),
            'middlename'=>$request->get('middlename'),
            'address'=>$request->get('address'),
            'nationality'=>$request->get('nationality'),
            'religion'=>$request->get('religion'),
            'contact'=>$request->get('contact'),
            'dob'=>$request->get('dob'),
            'gender'=>$request->get('gender'),
            'blood'=>$request->get('blood'),
            'email'=>$request->get('email'),
            'state'=>$request->get('state'),
            'country'=>$request->get('country'),
            'RegNo'=>$reg,
            'password'=>$request->get('surname')

        ));
        $students->save();
        return redirect('/admin/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
