@extends('header')
@section('index-body')
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 bg-dark mt-3">
            <form method="post" action="/loginaction">
                @csrf
                <div class="form-check mb-3 mt-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class=" form-check mb-3">
                    <label for="password" class="form-label">PASSWORD:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="form-check">
                    <input type="submit" class="btn btn-primary" value=" submit">
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
@endsection