@extends('layout')
@section('content')
    <div class="side-navbar">
        @foreach ($categories as $category)
        <a href=""></a>
          <a href=""></a>
        <a href=" {{ route('category_dish',['category_id'=>$category->category_id]) }}">{{ $category->category_name }}</a>
        @endforeach
    </div>
               
           <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Foodies Menu</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
                </ul>
            </div>
        </section>
    </div>

		<div class="products">	 
		<div class="container">
			<div class="col-lg-12 product-w3ls-right">
                     <div class="menu-w3ls py-5" id="menu">
				<div class="products-row">
                    @foreach ($categoryDish as $dish)
                        
					 <!-- Item starts -->
                    
                <div class="col-lg-6 menu-section" data-menu-section>
                  <div class="wrapper">
                <div class="row menu-item">
                        <div class="col-3 p-1 position-relative">
                            <img class="lazyOwl" src="{{ asset('/images/dish_img/')}}/{{ $dish->dish_image }}" style="height: 100px; width:120px;" title="Our latest gallery" alt="">
                            @if (Session::get('customer_id'))
                                <a href="{{ route('category_dish', ['category_id'=>$dish->category_id]) }}" class="btn button-style button-style-2" data-toggle="modal" data-target="#myModal1{{ $dish->dish_id }}">Add</a>
                            @else
                                <a href="" class="btn button-style button-style-2" data-toggle="modal" data-target="#login_or_register">Add</a>
                       @endif
                            </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name" data-dish_name>
                                    <h6>{{ $dish->dish_name }}</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>RM {{$dish->price }}</h6>
                                </div>
                            </div>
                            <div class="menu-item-description" data-dish_detail>
                                <p>{{ $dish->dish_detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                    <!-- Item end -->
                    
                    
                    
<!-- modal add to cart--> 
	<div class="modal video-modal fade" id="myModal1{{ $dish->dish_id }}" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
                <div class="card" style="width: 31.1rem;">
                <img src="{{ asset('/images/dish_img/')}}/{{ $dish->dish_image }}" alt=" " class="img-responsive">
                    <div class="card-body">
                        <h3 class="card-title fw-bold" style="color: gray">{{ $dish->dish_name }}</h3>
                            <p class="card-text fw-normal">{{ $dish->dish_detail }}</p>
                            <p class="card-text" >RM {{ $dish->price }}</p><br>
                            <form action="{{ route('add_to_cart') }}" method="post">
								@csrf
								<input type="hidden" name="dish_id" value="{{ $dish->dish_id }}" />
							        <h5 class="fw-bolder" style="color: gray">Quantity:</h5>	<input type="number" min="1" name="qty" value="1"/> 
								<button type="submit" class="btn btn-primary" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
                        </div>
                    </div>
				</section>
			</div>
		</div>
	</div> 
                    @endforeach
	<!-- //modal -->
    
    <!-- Modal register or register -->
<div class="modal fade" id="login_or_register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="card text-center">
  <div class="card-header">
    Welcome To TWT Food Paradise
  </div>
  <div class="card-body">
    <h5 class="card-title">Register or Login</h5>
    <p class="card-text">Lets sign in or sign up your own account</p>
    <a href="{{ route('sign_up') }}" class="btn-block btn-primary text-center rounded-pill" style="height: 60px; width:auto; padding-top:12px; margin-top:25px; font-size:25px;"> <span class="mt-5">Register</span></a><br>
    OR
    <a href="{{ route('login_in') }}" class="btn-block btn-success text-center rounded-pill" style="height: 60px; width:auto; padding-top:12px; margin-top:25px; font-size:25px;">
                 <span class="mt-5">Login</span></a>
  </div>
  <div class="card-footer text-muted">
    Thank You
  </div>
</div>
  </div>
</div>
<!-- end modal -->
           
					<div class="clearfix"> </div>
                      			</div>
    			</div>
                
        </div>
        </div>
        </div>
        
<style>
 
      .side-navbar{
                    height: 100%;
                    width: 157px;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    bottom: -30%;
                    left: 0;
                    background-color: rgb(15, 191, 109);
                    overflow: hidden;
                }

                .side-navbar a{
                    padding: 25px 10px 10px 50px;
                    text-decoration: none;
                    font-size: 18px;
                    display: block;
                    text-transform: uppercase;
                    color: 	#000000;
                    font-weight: bold;
                }
                .side-navbar a:hover{
                    color: black;
                }
                .content-area{
                    margin-left: 230px;
                    padding: 0 10px;
                    padding-top: 80px;

                }

                #about{
                    background: darkkhaki;
                }
</style>
@endsection