@extends('header')
@section('index-body')

<form method="post" action="/regaction">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center text-danger"> Registration Form</h3>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Your contact no" required data-error="Please enter your contact no">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="address" placeholder="Your contact Address" required data-error="Please enter your address"></textarea>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Your password" id="password" class="form-control" name="password" required data-error="Please enter your password">
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
@endsection