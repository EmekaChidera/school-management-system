@extends('layouts.app')
@section('content')
    <center>
        <h3>Add Courses</h3>
        <form method="post">
            {{csrf_field()}}
            <input type="text" placeholder="Course code" name="code" required><br>
            <input type="text" placeholder="Title" name="title" required><br>
            <input type="number" max='2' name="semester" placeholder="Semester" required><br>
            <input type="text" placeholder="description" name="description" required><br>
            <input type="submit" name="submit">
        </form>
    </center>

@endsection