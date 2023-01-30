@extends('user.header')
@section('user-body')
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    @foreach($res as $values)
<form method="post" action="/profileaction/{{$values->id}}">
    @csrf
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center text-danger">MY PROFILE</h3>
            <div class="form-group">
                <label for="">NAME</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$values->name}}" >
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="">CONTACT NO</label>
                <input type="text" class="form-control" id="contactno" name="contactno" value="{{$values->contactno}}" >
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="">ADDRESS</label>
                <textarea class="form-control" rows="5" id="comment" name="address" value="{{$values->address}}">{{$values->address}}</textarea>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="">EMAIL</label>
                <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" value="{{$values->email}}">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="">PASSWORD</label>
                <input type="text" placeholder="Your password" id="password" class="form-control" name="password" value="{{$values->password}}">
                <div class="help-block with-errors"></div>
            </div>
            <div class="submit-button text-center">
                <button class="btn hvr-hover" id="submit" type="submit">submit</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-6"></div>
    </div>
</form>
@endforeach
    </div>
    <div class="col-sm-4"></div>
</div>

@endsection
