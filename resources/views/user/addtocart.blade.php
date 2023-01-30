@extends('user.header')
@section('user-body')
<div class="container mx-3 mt-4">
    @foreach($res as $values)
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 pt-5">
                    <center> <img src="/file/{{$values->image}}" height="200px" width="200px" alt="image"></center>
                </div>
                <div class="col-sm-4">
                    <div class="contact-form-right">
                        <form method="post" action="/addtocartaction/{{$values->id}}">
                            @csrf
                            <h3 class="text-center text-danger">add to cart</h3>
                            <div class="form-group">
                                <label for="">PRODUCT ID</label>
                                <input type="text" id="productid" name="productid" class="form-control" value="{{$values->id}}">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                            <label for="">PRODUCT NAME</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$values->name}}">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                            <label for="">PRICE</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{$values->price}}">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                            <label for="">QUANTITY</label>
                                <input type="number" class="form-control" rows="5" id="quantity" value="1" min="1" name="quantity">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                            <label for="">TOTAL</label>
                                <input type="text" id="total" class="form-control" name="total" value="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn hvr-hover" id="submit" type="submit">submit</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
		$("#quantity").on('change', function()
		{
            // alert("hai")
            var quantity=$(this).val();
            // alert(quantity)
            var price = $("#price").val();
            // alert(price)
            var total=parseInt(price)*parseInt(quantity);
            // alert(total)
            $('#total').val(total); 
		});
	});
</script>
@endsection