@extends('admin.header')
@section('admin-body')
<div class="container mx-3 mt-4">
    @foreach($res as $values)
<form method="post" action="/editproductaction/{{$values->id}}"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-6 bg-danger ">
            <h3 class="text-center text-">ADD PRODUCT</h3>
            <div class="form-group mb-3 mt-3">
                <input type="text" class="form-control" id="name" value="{{$values->name}}" name="name" placeholder="name" required data-error="Please enter subject">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group mb-3 mt-3">
                <input type="text" class="form-control" id="price" value="{{$values->price}}" name="price" placeholder="price" required data-error="Please enter subject">
                <div class="help-block with-errors"></div>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" id="description" value="{{$values->description}}" name="description" placeholder="description" required data-error="Please enter description">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group mb-3 mt-3">
                <input type="file" class="form-control" id="image" value="/file/{{$values->image}}"  name="uploadimage" placeholder="image" required data-error="Please enter subject">
                <img src="/file/{{$values->image}}" height="50px" width="50px" alt="image">
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
@endsection