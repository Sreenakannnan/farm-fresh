@extends('admin.header')
@section('admin-body')
<table class="table table-responsive">

        <thead>
            <tr>
                <th>ID</th>
                <th>SUBJECT</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($res as $values)
            <tr>
            
                <td>{{$values->id}}</td>
                <td>{{$values->subject}}</td>
                <td>{{$values->description}}</td>
                <td>{{$values->status}}</td>
                <td><a href="/editabout/{{$values->id}}">EDIT</a></td>
                <td><a href="/deleteabout/{{$values->id}}">DELETE</a></td>
            </tr>
          @endforeach  
        </tbody>
    </table>
@endsection