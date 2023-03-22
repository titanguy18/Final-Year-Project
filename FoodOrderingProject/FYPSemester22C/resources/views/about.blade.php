@extends('layout')
@section('content')
<div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- about2 section -->
    <section class="w3l-about2">
        <div class="content-with-photo4-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-2-secs-right">
                        <img src="{{url('images/anya.png')}}" alt="" class="img-fluid img-responsive" />
                    </div>
                    <div class="col-lg-6 about-2-secs py-lg-5 pt-lg-0 pt-5">
                        <h3 class="title-big">Fresh and Quality Ingredients for Our Customers!</h3>
                        <p>We only get fresh ingredients and have the meals made to order, nothing stored, all fresh out of the kitchen!
                        </p>
                        <ul>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>Organic and pesticide free ingredients</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>All meals are cooked the same way it would be in their country of Origin</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>Our chefs have years of cooking experience</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>We can cater to our customer's needs no matter how big or small</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->
    <!-- stats -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-md-4 py-3">
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="5100" data-speed="1500"></div>
                            <p class="count-text ">satisfied customers</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="971" data-speed="1500"></div>
                            <p class="count-text ">Experienced chefs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                            <p class="count-text ">Daily Orders</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="36" data-speed="1500"></div>
                            <p class="count-text ">Quality is Key</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container py-md-4 py-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">All our Chefs are skilled in cooking the dishes and have decades of experience!</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="{{url('images/chef1.1.png')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4 style="color:white">Experienced in Japanese Cuisine</h4>
                                        <p>Japanese Cusine Chef</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="{{url('images/chef4.png')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4 style="color:white">Years of creating Western dishes</h4>
                                        <p>Western Cuisine Chef</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- big video about -->
    <section class="w3l-big-video-about video-section pb-md-5 pb-2 pt-md-4 pt-2">
        <div class="container pb-md-5 pb-3">
            <div class="position-relative">
                <img src="{{url('images/japcook2.jpg')}}" alt="" class="img-fluid radius-image-full">
                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                    <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                    </span>
                </a>
                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/3lL8Szf0ytc" frameborder="0" allow="autoplay; fullscreen"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- big video about -->
    <!-- promocode section -->
    <section class="w3l-promocode">
        <div class="promo-block pt-md-0 pt-4">
            <div class="container">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="{{url('images/ani.png')}}" class="img-responsive" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                        <h6>For Discounts and Special Offers!</h6>
                        <h4>Subscribe to Our Newsletter</h4>
                        <p class="mb-4"> Receive updates from us as soon as possible and not miss out on any great deals or important announcements!</p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Always be up to date with us!</label>
                                <form action="#" methos="GET" class="d-flex wrap-align">
                                    <input type="email" placeholder="Enter your email id" required="required" />
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="app-4-icon">                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection