@extends('admin.header')
@section('admin-body')
<table class="table table responsive">
<thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CONTACT NO</th>
                <th>ADDRESSS</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($res as $values)
            <tr>
            
                <td>{{$values->id}}</td>
                <td>{{$values->name}}</td>
                <td>{{$values->contactno}}</td>
                <td>{{$values->address}}</td>
                <td>{{$values->email}}</td>
                <td>{{$values->password}}</td>
                
            </tr>
          @endforeach  
        </tbody>
</table>
@endsection