@extends('Dashboard.Admin')

@section('title')
  Coupon Code Add
   @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-3 col-md-5 my-lg-5">

           @if(Session::get('sms')) 
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>{{ Session::get('sms') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card">
    <div class="card-header text-center">
Coupon Code
    </div>
    <div class="card-body">
        <form action=" {{ route('save_coupon_code') }}" 
        method="post">
        @csrf
<div class="form-group">
<label>Code Title</label>
<input type="text" class="form-control" name="coupon_title">
</div> 

<div class="form-group">
<label>Dish No</label>
<input type="text" class="form-control" name="dish_id">
</div> 

<div class="form-group">
<label>Coupon Price</label>
<input type="text" class="form-control" name="coupon_price">
</div> 

<div class="form-group">
<label>Coupon Code</label>
<input type="text" class="form-control" name="coupon_code">
</div>

<div class="form-group">
<label>Coupon Limit</label>
<input type="text" class="form-control" name="coupon_limit">
</div>

<div class="form-group">
<label>Coupon Used</label>
<input type="text" class="form-control" name="coupon_used" value="0" readonly>
</div>

<div class="form-group">
<label>Added On</label>
<input type="date" class="form-control" name="added_on">
</div>


<div class="form-group">
<label>Status</label>
<div class="radio">
        <input type="radio" name="coupon_status" value="1">Active
        <input type="radio" name="coupon_status" value="0">Inactive
    </div>
</div>

<button type="submit" name="btn" class="btn btn-outline-primary btn-block">Coupon Add</button>
</form>
    </div>
    
</div>
        </div>
    </div>
</div>

   @endsection
