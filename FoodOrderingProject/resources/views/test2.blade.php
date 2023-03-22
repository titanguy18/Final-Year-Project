@extends('layout')
@section('content')

<head>
  <style> 
    body{
    background: #f4f5f7;
    margin-top:80px;
}
.cart-container {
  border: 1px solid rgba(0, 0, 0, 0.05);
  padding: 30px;
}
.cart-container .cart-body {
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  padding: 30px 0 20px;
  margin: 20px 0 30px;
}
  </style>

</head>

<link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css')}}">
<br><br><br><br><br>
<div class="container">    
<div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif            
<div class="contentbar">                
        <!-- Start row -->
        
        <div class="row">
            
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">My Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-10">
                                <div class="cart-container">
                                    <div class="cart-head">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Remove</th>                                               
                                                        <th scope="col">Dish Image</th>
                                                        <th scope="col">Dish Name</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @php($i=1)
                                                @php($sum=0)
                                                @foreach ($CartDish as $dish)
                                                    <tr>
                                                        <th scope="row">{{ $i++ }} </th>
                                                        <td><a href="{{ route('remove_item', ['rowId'=>$dish->rowId]) }}" type="button" class="btn btn-danger"" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="{{ asset('/images/dish_img/')}}/{{ $dish->options->image }}" class="img-fluid" width="35" alt="1"></td>
                                                        <td>{{ $dish->name }}</td>
                                                        <td>
        <form action="{{ route('update_cart') }}" method="post">
          @csrf
           <input type="hidden" name="rowId" value="{{ $dish->rowId }}">
           <input type="number" name="qty" value="{{ $dish->qty }}" style="width: 50px; height:25px" min="1">
           <input type="submit" name="btn" value="Update" class="btn btn-success" style="width: 57px; height:25px; padding-top: 0; padding-bottom: 0; padding-left:0; padding-right:0;">
      </form>
          </td>
                                                        <td>$ {{$dish->price}}</td>
                                                        <td class="text-right">${{ $subTotal= $dish->price*$dish->qty }}</td>
                                                        <input type="hidden" value=" {{ $sum = $sum + $subTotal }}">                   
                                                    </tr>  @endforeach
      <tr>
     <td colspan="6">Total grand</td>
     <td class="text-center" value="0" readonly>$ {{ $sum }} </td>

     <?php

use Illuminate\Support\Facades\Session;

         Session::put('sum', $sum);
     ?>
   </tr>                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-body">
                                        <div class="row">
                                            <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                <div class="order-note">
                                                    <form>
                                                        <div class="form-group">
                                                        <label>Promo Code:</label>
                                                            <div class="have-code-container">
                                                                <input type="text" class="form-control" placeholder="Enter your code" aria-label="Search" aria-describedby="button-addonTags" id="promoCode" name="promoCode">
                                                                <input type="button" name="submit" class="fv-btn" value="Apply Coupon" onclick="set_coupon()">
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="specialNotes">Special Note for this order:</label>
                                                            <textarea class="form-control" name="specialNotes" id="specialNotes" rows="3" placeholder="Message here"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                <div class="order-total table-responsive ">
                                                    <table class="table table-borderless text-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>Sub Total :</td>
                                                                <td>$ {{ $sum }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Discount:</td>
                                                                <td type="number" name="promocode" id="promocode" readonly></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tax(6%) :</td>
                                                                <td>$ {{ $tax = $sum * 0.06 }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h4>Amount :</h4></td>
                                                                <td class="f-w-7 font-18"><h4 id="totalAmount">$ {{$totalAmount = $tax + $sum}}</h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <!--a href="{{url('/payment')}}" class="btn btn-success my-1">Proceed to Checkout<i class="ri-arrow-right-line ml-2"></i></a-->
                                        <a href="" class="btn button-style button-style-2" data-toggle="modal" data-target="#myModal1{{ $dish->dish_id }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- modal --> 
	<div class="modal video-modal fade" id="myModal1{{ $dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog"  role="document">
			<div class="modal-content ">
				<div class="modal-header">
                    <h6>Please choose Payment method</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
                        <form action="{{ route('new_order') }}" method="post">
    @csrf
<table class="table table-bordered"> 
    <tr>
        <th>Cash On Delivery</th>
        <td><input type="radio" name="payment_type" value="Cash"> Cash</td>
    </tr>
    <tr>
        <th>Stripe Card </th>
        <td><input type="radio" name="payment_type" value="Stripe"> Stripe </td>
    </tr>
    </table>
    <div class="cart-footer text-right">
    <input type="submit" name="btn" class="btn btn-success modal_body_right" value="Confirm Order">
    </div>
</form>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
	<!-- //modal -->
    </div>

    <script>
         function set_coupon(){
            var promoCode = jQuery('#promoCode').val();
            if(promoCode!='') {
                jQuery.ajax({
                    url:'set_coupon.blade.php',
                    type:'post',
                    data:'promoCode' + promoCode,
                    success:function(result){
                          console.log(result);
                    }
                })
            }

       /* let promocode=document.getElementById('promocode').value;
        if(promocode==1234){
            displaycart(50);
        }
        else(
            prompt("Enter correct promo code")
        ) */
    }
    </script>
<br><br><br>
@endsection