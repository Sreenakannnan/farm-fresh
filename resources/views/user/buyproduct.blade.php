@extends('user.header')
@section('user-body')
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($res as $values)
                            <tr>
                                <td><img src="/file/{{$values->image}}" height="50px" width="50px" alt="image"></td>
                                <td>{{$values->name}}</td>
                                <td>{{$values->price}}</td>
                                <td>{{$values->quantity}}</td>
                                <td>{{$values->total}}</td>
                                <td></td>
                               
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td><a href="/proceedtobuy"><button class="btn">procedd to buy</button></td>
                                <td>Grand Total</td>
                                @foreach($sum as $total)
                                <td>{{$total->subtotal}}</td>
                                @endforeach
                                
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end table -->
@endsection