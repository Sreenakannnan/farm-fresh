@extends('user.header')
@section('user-body')
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <tr>
                            <th>ORDER ID</th>
                            <th>TOTAL</th>
                        </tr>
                        @foreach($res as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->total}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection