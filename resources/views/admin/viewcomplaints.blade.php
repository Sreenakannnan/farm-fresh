@extends('admin.header')
@section('admin-body')
<table class="table table responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SUBJECT</th>
            <th>MESSAGE</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($res as $values)
        <tr>

            <td>{{$values->id}}</td>
            <td>{{$values->name}}</td>
            <td>{{$values->email}}</td>
            <td>{{$values->subject}}</td>
            <td>{{$values->message}}</td>
            <td>{{$values->status}}</td>
            <td><a href="/approved/{{$values->id}}">APPROVED</a></td>
            <td><a href="/declined/{{$values->id}}">DECLAINED</a></td>
        <tr>
            @endforeach
    </tbody>
    @endsection