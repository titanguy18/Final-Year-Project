@extends('layout')
@section('content')
    <!-- products -->
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
			<div class="col-md-9 product-w3ls-right">
                 
				<div class="products-row">
                    @foreach ($categoryDish as $dish)
                        
					 <!-- Item starts -->
                <div class="col-lg-6 menu-section">
                <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img class="lazyOwl" src="{{ asset('/images/dish_img/')}}/{{ $dish->dish_image }}" style="height: 100px; width:120px;" title="Our latest gallery" alt="">
                            <a href="{{ route('category_dish', ['category_id'=>$dish->category_id]) }}" class="btn button-style button-style-2" data-toggle="modal" data-target="#myModal1{{ $dish->dish_id }}">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>{{ $dish->dish_name }}</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>RM {{$dish->price }}</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>{{ $dish->dish_detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Item end -->
                    
                    
 <!-- modal --> 
	<div class="modal video-modal fade" id="myModal1{{ $dish->dish_id }}" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ asset('/images/dish_img/')}}/{{ $dish->dish_image }}" alt=" " class="img-responsive">
						</div>
						<div class="col-md-7 modal_body_right single-top-right"> 
							<h3 class="item_name">{{ $dish->dish_name }}</h3>
							<p>{{ $dish->dish_detail }}</p>
							
							<div class="price">
								<ul>
									<li>RM {{ $dish->price }} </li>
								</ul>	
							</div> 
							
							<form action="{{ route('add_to_cart') }}" method="post">
								@csrf
								<input type="hidden" name="dish_id" value="{{ $dish->dish_id }}" />
							<h4>Quantity</h4>	<input type="number" min="1" name="qty" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						
						</div> 
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div> 
                    @endforeach
	<!-- //modal -->
           
					<div class="clearfix"> </div>
                      			</div>
    			</div>
        </div>
                    <!-- start side bar -->
                                     <div class="side-navbar">
                @foreach ($categories as $category)
              <a href="{{ route('category_dish',['category_id'=>$category->category_id]) }}"></a>
            @endforeach
            </div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Categories</h4>            
						<div class="row row1 scroll-pane">            
		@foreach ($categories as $category)
        	<label class="checkbox">
	<a href="{{ route('category_dish',['category_id'=>$category->category_id]) }}" >
   {{ $category->category_name }}</a></label>
    @endforeach
						</div> 
					</div>
			</div>
			<div class="clearfix"> </div>
                 </div> 
            </div>

            <!-- end side bar -->


            <style>
                .side-navbar{
                    height: 100%;
                    width: 180px;
                    position: fixed;
                    z-index: 1;
                    top:-10;
                    left: 0;
                    background-color: green;
                    overflow: hidden;
                }

                .side-navbar a{
                    padding: 50px 10px 10px 50px;
                    text-decoration-skip: none;
                    font-size: 18px;
                    display: block;
                }
                .side-navbar a:hover{
                    color: deeppink;
                }
            </style>
	
  

        
@endsection
