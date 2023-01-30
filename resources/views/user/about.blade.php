@extends('user.header')
@section('user-body')
<div class="row">
    <div class="col-sm-6 mt-5 p-5">
        <img src="/img/vegshop.jpg" height="350px" width="650px" alt="image">
    </div>
    <div class="col-sm-6 mt-6 p-5">
        <div class="dis mt-5 p-5">
            @foreach($res as $values)
            <h2 class="text-danger"><b><u>{{$values->subject}}</u></b></h2>
            <h1>{{$values->description}} </h1>

            @endforeach
        </div>
    </div>
    @endsection