@extends('layouts.app')
@section('content')
<ul>
@foreach($faculty as $facult)
    <li>{{$facult->name}}</li>
@endforeach
</ul>
@endsection