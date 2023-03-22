@extends('FrontEnd.master')
@section('title')
           Sign In
@endsection
@section('content')
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="{{ asset('/') }}FrontEndSourceFile/images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign In to your account</h3>  
            <strong class="text-center" style="color:red;">{{ Session::get('sms') }}</strong>
			<div class="login-agileinfo"> 
				<form action="{{ route('check_login') }}" method="post"> 
                    @csrf
					<input class="agile-ltext" type="email" name="email" placeholder="Your Email is..." required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Login In">
				</form>
			</div>	 
		</div>
	</div>
	<!-- //sign up-page -->  
	<!-- subscribe -->
@endsection
