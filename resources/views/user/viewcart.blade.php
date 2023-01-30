@extends('user.header')
@section('user-body')
<!-- table -->
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
                                <td> <a href="/removeproduct/{{$values->id}}">Remove Product</a></td>
                               
                            </tr>
                            @endforeach
                            <tr>
                                
                            @foreach($sum as $total)
                                <td></td>
                                <td><a href="/buyproduct/{{$total->subtotal}}"><button class="btn">Buy products</button></td>
                                <td><a href="/index"><button class="btn">Add another product</button></a></td>
                                <td>Grand Total</td>
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
@overwrite