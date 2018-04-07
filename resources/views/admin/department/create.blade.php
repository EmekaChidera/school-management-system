@extends('layouts.app')
@section('content')
    <center>
    <h3>Add new Departments</h3>
        <form method="post">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="Department
            "> 
            <input type="submit" name="submit">
        </form>
    </center>
@endsection