@extends('admin.header')
@section('admin-body')
<div class="container mx-3 mt-4">
<form method="post" action="/aboutaction">
    @csrf
    <div class="row">
        <div class="col-sm-6 bg-danger ">
            <h3 class="text-center text-">ADD ABOUT</h3>
            <div class="form-group mb-3 mt-3">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required data-error="Please enter subject">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="description" name="description" placeholder="description" required data-error="Please enter description">
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
</div>
@endsection