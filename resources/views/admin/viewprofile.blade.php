@extends('admin.header')
@section('admin-body')
<table class="table table responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
        </tr>
    </thead>
    <tbody>
        @foreach($res as $values)
        <tr>

            <td>{{$values->id}}</td>
            <td>{{$values->email}}</td>
            <td>{{$values->password}}</td>
        <tr>
            @endforeach
    </tbody>
    @endsection