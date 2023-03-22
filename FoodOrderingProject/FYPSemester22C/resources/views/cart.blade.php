@extends('layout')
@section('content')

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
                                                @php($totalAmount=0)
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
                                                            <label>Set Your Dine-in Time and Date</label><br>
                                                            <label>Date:</label>
                                                            <div class="have-code-container">
                                                                <input type="date" name="date" id="date">
                                                            </div><br>
                                                            <label>Time:</label>
                                                            <div class="have-code-container">
                                                                <input type="time" name="time" id="time">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Promo Code: </label>
                                                        <div class="have-code-container">
                                                                <input type="text" class="form-control" placeholder="Enter your code" aria-label="Search" aria-describedby="button-addonTags" id="promoCode" name="promoCode"> <br>
                                                                <input type="submit" name="apply_coupon" class="btn btn-primary" value="Apply Coupon" onclick="applyCoupon()"> <br>
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="specialNotes">Special Note for this order:</label>    
                                                        </div>
                                                        <div class="form-group">
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
                                                                <td class="f-w-7 font-18"><h4 id="totalAmount" name="sub" id="sub">$ {{$totalAmount = $tax + $sum}}</h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-left col-md-12">
                                           <a href="{{ route('category_dish',['category_id'=>1]) }}" class="btn btn-info rounded-pill" type="button" style="color: black">< Continue Shopping</a>
                                    </div>
                                    <div class="cart-footer text-right col-md-12" role="group">
                                         <form action="{{ route('order_by_cash') }}" method="post">
    @csrf
                                    <input type="submit" name="payment_type" value="Cash" class="btn btn-success">  </form>
                                        OR
                                        <form action="{{ route('order_by_stripe') }}" method="post"> @csrf
                                            <input type="submit" name="payment_type" value="Stripe" class="btn btn-success">  </form>
                                        </form>
                                    </div>
                                    <script>
                                        function applyCoupon(){
                                            alert('testing testing')
                                        }
                                    </script>
                                    <?php 
  if(isset($_POST['apply_coupon'])){
     $promoCode = $_POST['promoCode'];

     if($promoCode == ""){

     } else{
        $get_coupons = "select * from coupons where coupon_code='$promoCode'";
        $run_coupons = mysqli_query($con,$get_coupons);
        $check_coupons = mysqli_num_rows($run_coupons);

        if($check_coupons == "1"){
            $row_coupons = mysqli_fetch_array($run_coupons);

            $coupon_dis_id = $row_coupons['dish_id'];
            $coupon_price = $row_coupons['coupon_price'];
            $coupon_limit = $row_coupons['coupon_limit'];
            $coupon_used = $row_coupons['coupon_used'];
      
            if($coupon_limit == $coupon_used){
                echo "<script> alert('Your Coupon Already Expired')</script>";
            } else{
                $get_cart = "select * from cart where dish_id='$dish_id' AND ip_add='$ip_add'";
                $run_cart = mysqli_query($con,$get_cart);
                $check_cart = mysqli_num_rows($run_cart);

                if ($check_cart == "1") {
                    $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$promoCode'";
                    $run_used = mysqli_query($con,$add_used);
                    $update_cart = "update cart set price='$coupon_price' where dish_id='$dish_id' AND ip_add='$ip_add'";
                    $run_update_cart = mysqli_query($con,$update_cart);

                    echo "<script> alert('Your Coupon Has Been Applied')</script>";
                    echo "<script>window.open('cart.php','_self')</script>";
                } else{
                    echo "<script> alert('You Dish Didn't Exist in Cart')</script>";
                }
            }

        } else{
            echo "<script> alert('You Coupon Is Not Valid') </script>";
        }
    }  
  }
?>
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
    
    </div>
</div>
</div>

    <?php

use Illuminate\Support\Facades\Session;

         Session::put('totalAmount', $totalAmount);
     ?>
<br><br><br>
@endsection