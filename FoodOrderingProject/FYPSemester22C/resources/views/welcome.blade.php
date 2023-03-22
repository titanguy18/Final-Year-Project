@extends('layout')
@section('content')
{{-- <script>
    function generateRandom(maxLimit = 100){
        let rand = Math.random() * maxLimit;
        rand = Math.floor(rand);
        return rand;
    }
    function getWinner(){
        document.getElementsByClassName('btn-winner')[0].innerHTML = 'Please wait for the reult...';
        interval = setInterval(function(){
            document.getElementById('odometer').innerHTML = generateRandom();
        });

        setTimeout(function(){
            clearInterval(interval);
            document.getElementsByClassName('btn-winner')[0].innerHTML = 'Get Winner';
        },3000);
    }
</script> --}}
    <!--//header-->
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-sm-4 mb-3 title">Japanese and Western Meals<br>To satisfy your cravings</h3>
                    <p>Our restaurant offers Japanese and a variety of Western dishes and sandwiches. From Udon to Burgers and so much more. Check out our menu to find out more!</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn button-style" href="{{ route('category_dish',['category_id'=>1]) }}">Here's our Menu</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <img class="img-fluid" src="{{url('images/food2.png')}}" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- about section -->
    <div class="w3l-content-photo-5">
        <div class="content pb-5 pt-md-5 pt-4">
            <div class="container py-lg-4 py-md-3">
                <div class="row">
                    <div class="col-lg-6 content-photo">
                        <a href="#image"><img src="{{url('images/food3.png')}}" class="img-responsive"
                                alt="content-photo"></a>
                    </div>
                    <div class="col-lg-6 content-left mb-md-0 mb-3">
                        <h3>Welcome To Our<span> Webpage!</span></h3>
                        <p>This is the official website for the TWT Food Paradise.</p>
                        <p>Please check our menu to see what we offer and check our About Us page to know more about us, more in detail. If you would like to talk to us, please head to the Contact Us page and We will get back to you.</p>
                        <a class="btn button-style" href="{{url('/about')}}">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about section -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 pt-md-4 pt-1 pb-5">
            <div class="container pb-md-4 pb-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">We always serve customers the best and cooked with fresh ingredients by our chefs with years of experience!</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="{{url('images/waiter.png')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><p>Our staff are always ready to serve you</p></h4>
                                        <p>Customer Service is key!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="{{url('images/cleaner.png')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><p>Cleanliness is very important to us</p></h4>
                                        <p>Cleaning Expert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-sec-11 mt-5 pt-lg-4">
                    <div class="row">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>Our kitchen is equipped with the latest equipments and we have a high standard of cleanliness which our staff is trained to follow.</p>
                                <a href="{{url('/about')}}" class="read-button">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 columns mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-coffee" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>All food and drinks are made to the highest standard and with the freshest and healthiest ingredients supplied to us by our supplier.</p>
                                <a href="{{url('/about')}}" class="read-button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-4">
                       
                        <div class="col-md-6 columns  mt-md-0 mt-4">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- video section -->
    <section class="video-section" id="work">
        <div class="midd-w3 py-5">
            <div class="container py-md-4 py-3">
                <div class="row">
                    <div class="col-lg-5 about-right-faq align-self">
                        <h3 class="title-big">You can watch our cooking video process!</h3>
                        <p class="mt-3">This video shows our customers an example of how they dishes is made. We make sure our customer knows how the everything is handled to gain their trust and have confidence in us..</p>
                        <a class="btn button-style mt-lg-5 mt-4 popup-with-zoom-anim play-view"
                            href="#small-dialog">Play Video
                        </a>
                    </div>
                    <div class="col-lg-7 left-wthree-img text-righ mt-lg-0 mt-5">
                        <div class="position-relative">
                        <img src="{{url('images/food4.png')}}" alt="" class="img-fluid radius-image-full">
                            <a href="#small-dialog"
                                class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://www.youtube.com/embed/oqaZV9Oxco0" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->
    <!-- blog section -->
    <section class="w3l-blog-sec py-5">
        <div class="services-layout py-md-4 py-3">
            <div class="container">
                <h3 class="title-big mb-4 pb-2">Reviews from some of our Customers</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <h3 class="date">21<sup>st</sup> October</h3>
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="{{url('images/gif1.gif')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">Great experience, the food tasted great, I would really recommend people to come and try it out!</a>
                                </h3>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column column-img mt-md-0 mt-4" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <h3 class="date">23<sup>rd</sup> October</h3>
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="{{url('images/gif2.gif')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">The ingredients tasted fresh and everything was seasoned perfectly! Couldn't have asked for more!</a>
                                </h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <h3 class="date">1<sup>st</sup> November</h3>
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="{{url('images/gif3.gif')}}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">The staff were really friendly and was always ready to help, the food was amazing and tasted like I was in Japan!</a>
                                </h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog section -->
    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-vv-action py-5">
            <div class="container py-md-4 py-3">
                <div class="grid">
                    <div class="float-lt">
                        <h3 class="title-big">Contact us now!</h3>
                        <p>For reservations or any questions, hit us up!</p>
                    </div>
                    <div class="float-rt text-right">
                        <ul class="buttons">
                            <li class="phone"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true"></span>
                                <a class="call-style-w3" href="tel:+60 142382489">+60 142382489</a>
                            </li>
                            <li class="green">Or</li>
                            <li><a href="{{url('/contact')}}" class="btn button-style">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->
    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids">                   
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Veteran Chefs</h5></a>
                            <p>We have experienced and veteran chefs from all around the world, with their own specialties and unique touch to the dishes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Make Reservations Online</a></h5>
                            <p>Our customers are able to make online reservations and order the meals in advance, have their order ready by the time they arrived.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Customer is Top</a></h5>
                            <p>Our customer is our No.1 priority, we can cater to their needs if there are allergic or have their own preferences when ordering their meals and drinks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lucky Draw Section-->
    <section class="w3l-promocode">
        <div class="promo-block pt-md-0 pt-4">
            <div class="container">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="{{url('images/ani2.png')}}" class="img-responsive" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                        <h6>Lucky Draw! Try Your Luck!</h6>
                        <h4>A Chance To Win Cool Prizes!</h4>
                        <p class="mb-4"> </p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Could be a discount or free meal voucher</label>
                                
                                {{-- <div id="odometer" class="odometer box">0</div>
                                    <div class="btn-winner box" onclick="getWinner();">Get Winner</div> --}}
                                
                                <form action="" method="" class="d-flex wrap-align">
                                    <input id="lucky-draw" type="lucky draw" placeholder="" required="required" readonly/>
                                    <button type="submit" id="submit" onclick="getWinner()">Good Luck</button>                                   
                                </form>
                                <label>Vouchers expires in one month from receiving</label>
                            </div>
                            <div class="app-4-icon">                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>