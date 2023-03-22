@extends('FrontEnd.master')
@section('title')
Cart Show item
@endsection
@section('content')

<div class="products">
<div class="container">
<div class="col-md-9 product-w3ls-right">
<div class="card">
<h3 class="card-header text-center mt-3" style="background-color: lightyellow; height: 70px; width: auto;">Cart Items</h3>
<div class="card-body">
<table class="table table-hover table-bordered table-responsive">
  <thead>

    <tr>
      <th scope="col">SL</th>
      <th scope="col">Remove</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Dish Image</th>
      <th scope="col">Dish Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Grand Total Price</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @php($sum=0)
    @foreach ($CartDish as $dish)
      
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <th scope="row">
        <a href="{{ route('remove_item', ['rowId'=>$dish->rowId]) }}" type="button" class="btn btn-danger">
          <span aria-hidden="true">x</span>
        </a>
      </th>

      <td>{{ $dish->name }}</td>
      <td><img src="{{ asset('/BackEndSourceFile/dish_img/')}}/{{ $dish->options->image }}" style="width：85px; height: 85px; border-radius: 80px;" alt=""></td>
       @if ($dish->options->half_price==null)
  <td>{{ $dish->price }} TK</td>
       @else   
       <td>{{ $dish->options->half_price }} TK</td>
       @endif

       <td>
        <form action="{{ route('update_cart') }}" method="post">
          @csrf
           <input type="hidden" name="rowId" value="{{ $dish->rowId }}">
           <input type="text" name="qty" value="{{ $dish->qty }}" style="width: 50px; height:25px" min="1">
           <input type="submit" name="btn" value="Update" class="btn btn-success" style="width: 57px; height:25px; padding-top: 0; padding-bottom: 0; padding-left:0; padding-right:0;">
      </form>
          </td>

        @if ($dish->options->half_price==null)
  <td>{{ $subTotal= $dish->price*$dish->qty }} TK</td>
       @else   
       <td>{{ $subTotal= $dish->options->half_price*$dish->qty }}</td>
       @endif
       <td>{{ $dish->subTotal }}</td>
      <input type="hidden" value=" {{ $sum = $sum + $subTotal }}">
    </tr>
 
    @endforeach
      <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td class="text-center">= {{ $sum }} tk</td>

     <?php
         Session::put('sum', $sum);
     ?>
   </tr>
  </tbody>
</table>
</div>
</div>
</div>

{{--@if (Session::get('customer_id','shipping_id'))
 <div class="col-md-9 product-w3ls-right">
  <a href="{{ url('/checkout/payment') }}" class="btn btn-info" style="float: right;">
    <i class="fa fa-shopping-bag"></i>
    Checkout
  </a>
</div> 
    @elseif (Session::get('customer_id'))
   <div class="col-md-9 product-w3ls-right">
  <a href="{{ url('/shipping') }}" class="btn btn-info" style="float: right;">
    <i class="fa fa-shopping-bag"></i>
    Checkout
  </a>
</div> --}}
@if (Session::get('customer_id'))
 <div class="col-md-9 product-w3ls-right">
  <a href="{{ url('/checkout/payment') }}" class="btn btn-info" style="float: right;">
    <i class="fa fa-shopping-bag"></i>
    Checkout
  </a>
</div> 
@else
<div class="col-md-9 product-w3ls-right">
  <a href="" data-toggle="modal" data-target="#login_or_register" class="btn btn-info" style="float: right;">
    <i class="fa fa-shopping-bag"></i>
    Checkout
  </a>
</div> 
@endif

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="login_or_register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-md-6">
               <div class="card">
               <div class="card-body">
              <h3> Welcome..! To Staple Food</h3>
               <div class="text-center" style=" margin-top:25px; height:160px; width:160px; border-radius:50%; background-color: darkblue; color:ghostwhite; padding-top: 65px; font-size:20px;"> Keep you smile..</div>
                  </div>
               </div>
        </div>

        <div class="col-md-6">
                 <div class="card">
                   <div class="card-body">
                 <h4>Are you a new member..!</h4>
                 <a href="{{ route('sign_up') }}" class="btn-block btn-primary text-center" style="height: 60px; width:auto; padding-top:12px; margin-top:25px; font-size:25px;"> <span class="mt-5">Register</span></a>
                 <h3 class="mt-lg-5 text-center">Or</h3>
                 <h4 class="mt-5">Already have an account...</h4>
                 
                 <a href="{{ route('login_in') }}" class="btn-block btn-success text-center" style="height: 60px; width:auto; padding-top:12px; margin-top:25px; font-size:25px;">
                 <span class="mt-5">Login</span></a>
                   </div>
                 </div>
       </div>

       <!-- sign up-page 
       <div class="login-page about">
         <div class="container">
          <h3 class="w3ls-title w3ls-title1">Sign Up to your account</h3>
          <div class="login-agileinfo">
           <form action="#" method="post">
             <input class="agile-ltext" type="text" name="name" placeholder="Username" required>
             <input class="agile-ltext" type="email" name="email" placeholder="Your Email" required>
             <input class="agile-ltext" type="email" name="phone_number" placeholder="Your Phone Number" required>
             <input class="agile-ltext" type="password" name="password" placeholder="Password" required>
             <input class="agile-ltext" type="password" name="Confirm Password" placeholder="Confirm Password" required>
             <div class="wthreelogin-text">
                <ul>
                 <li>
                   <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><span>I agree to the terms of service</span></label>
                 </li>
                </ul>
                <div class="clearfix">    </div>
             </div>
             <input type="submit" value="Sign Up">
           </form>
           <p>Already have an account? <a href="login.html">Login Now！</a></p>
                     </div>
                    </div>
 </div>
     <!-- //sign up-page -->

      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
@endsection