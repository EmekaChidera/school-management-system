@extends('layouts.app')
@section('content')


<H3>Add Faculty</h3>
<div style="width:150px; margin-left:500px;">
    <form method="post">
    {{csrf_field()}}
    <div>
        <div style="float:left;">
            <label>Name</label>
        </div>
        <div style="float:right">
            <input type="text" name="name" required>
        </div>
    </div>
    <div style="clear:both;"></div>
    <div>
        <input type="submit" value="submit">
    </div>

    </form>
</div>
@endsection