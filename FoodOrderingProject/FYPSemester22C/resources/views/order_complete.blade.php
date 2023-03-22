@extends('layout')
@section('content')
   <div class="content-area col-11">
       <div class="wrapper ">
              <h2 class="text-center fw-bolder">Thank you for your payment</h2><br>
              <p class="text-center fst-italic">The dishes will be prepare soon...</p>
       </div>
   </div>

   <style>
    .wrapper{
        width: 500px;
        margin: 20% auto;
    }

    .content-area{
        height: 30vh;
    }

    .text-content h2{
        padding-top: 20%;
        font-size: 60px;
        margin: 0;
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
    }
   </style>
        
@endsection