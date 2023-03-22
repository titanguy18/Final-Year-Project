@extends('layout')
@section('content')
<div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Register New Account</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Register</li>
                </ul>
            </div>
        </section>
    </div>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="{{route('store_customer')}}" method="post" enctype="multipart/form-data"><br><br> @csrf

              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-5">Please Fill in your Details Below</p>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeNameX">Name</label>
                <input name="name" type="name" id="typeNameX" class="form-control form-control-lg" />               
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Email</label>
                <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />               
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />                
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeConfirmPasswordX">Re-enter Password</label>
                <input name="confirm_password" type="password" id="typeConfirmPasswordX" class="form-control form-control-lg" />                
              </div>
                <br>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
</form>
            </div>
            <div>
              <p class="mb-0">Already have an Account? <a href="{{route('login_in')}}" class="text-white-50 fw-bold">Sign In</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br><br><br><br><br><br>
@endsection