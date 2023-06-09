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
<div class="contentbar">                
        <!-- Start row -->
        
        <div class="row">
            
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title" style="color:black">My Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="cart-container">
                                    <div class="cart-head">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Action</th>                                               
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple Watch</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty1" id="cartQty1" value="1">
                                                            </div>
                                                        </td>
                                                        <td>$10</td>
                                                        <td class="text-right">$500</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                       <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPhone</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty2" id="cartQty2" value="1">
                                                            </div>
                                                        </td>
                                                        <td>$20</td>
                                                        <td class="text-right">$200</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPad</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty3" id="cartQty3" value="1">
                                                            </div>
                                                        </td>
                                                        <td>$30</td>
                                                        <td class="text-right">$300</td>
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
                                                            <div class="input-group">
                                                                <label for="setDateAndTime" style="color:black">Please Set Your Dine-in Time:</label>
                                                                <div class="form">
                                                                    <label for="date" style="color:black">Date:</label>
                                                                <input type="date" class="form-control" aria-label="Date" aria-describedby="button-addonTags" date_format="DD-MM-YYYY">
                                                                <label for="time" style="color:black">Time:</label>
                                                                <input type="time" class="form-control" aria-label="Time" aria-describedby="button-addonTags">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="search" class="form-control" placeholder="Coupon Code" aria-label="Search" aria-describedby="button-addonTags">
                                                                <div class="input-group-append">
                                                                    <button class="input-group-text" type="submit" id="button-addonTags">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="specialNotes" style="color:black">Special Note for this order:</label>
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
                                                                <td>$1000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping :</td>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tax(18%) :</td>
                                                                <td>$180.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h4 style="color:black">Amount :</h4></td>
                                                                <td class="f-w-7 font-18"><h4 style="color:black">$1180.00</h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <button type="button" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Update Items</button>
                                        <a href="{{url('/payment')}}" class="btn btn-success my-1">Proceed to Checkout<i class="ri-arrow-right-line ml-2"></i></a>
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
    </div>
<br><br><br>
@endsection