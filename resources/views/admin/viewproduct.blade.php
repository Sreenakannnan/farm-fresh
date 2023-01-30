@extends('admin.header')
@section('admin-body')
<table class="table table-responsive">

        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($res as $values)
            <tr>
            
                <td>{{$values->id}}</td>
                <td>{{$values->name}}</td>
                <td>{{$values->price}}</td>
                <td>{{$values->description}}</td>
                <td><img src="/file/{{$values->
                image}}" height="50px" width="50px" alt="image"></td>
                <td><a href="/editproduct/{{$values->id}}">EDIT</a></td>
                <td><a href="/deleteproduct/{{$values->id}}">DELETE</a></td>
            </tr>
          @endforeach  
        </tbody>
    </table>
    
@endsection