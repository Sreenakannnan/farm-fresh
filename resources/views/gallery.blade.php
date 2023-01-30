@extends('header')
@section('index-body')
<!-- Start Gallery  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Our Gallery</h1>
                </div>
            </div>
        </div>

        <div class="row special-list">
            @foreach($res as $values)

            <div class="col-lg-3 col-md-6 special-grid bulbs">
                <div class="products-single fix">

                    <div class="box-img-hover">
                        <img src="/file/{{$values->image}}" class="img-fluid" alt="Image">
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection