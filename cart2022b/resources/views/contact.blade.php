@extends('layout')
@section('content')
<div class = "row">
<div class="col-sm-12">
                <div class="row">              
                <div class="col-sm-6">
                  <h2>Contact Us</h2>
                  Name: <input type="text" class="form-control">
                  Phone: <input type="text" class="form-control">
                  Email: <input type="email" class="form-control">
                 
                  Your enquiry <textarea class="form-control" id="" cols="30" rows="3"></textarea><br>
                  <button class="btn btn-info">Submit</button><br><br>
                </div>
                <div class="col-sm-6">
                    <h2>MY Location</h2>
                    <div style="margin-top: 5px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.388106476252!2d103.67892554177345!3d1.5341737109888838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73c109632e0b%3A0x74cda51bf210c304!2sSouthern%20University%20College!5e0!3m2!1sen!2smy!4v1649392475162!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                </div>
            </div>
            
</div>

@endsection