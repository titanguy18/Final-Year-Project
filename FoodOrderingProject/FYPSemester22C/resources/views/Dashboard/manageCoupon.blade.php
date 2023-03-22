@extends('Dashboard.Admin')
@section('title')
 Manage Coupon Code 
@endsection
@section('content')
 <!-- for display message -->
             @if(Session::get('sms')) 
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>{{ Session::get('sms') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
 <!-- end message -->
          <div class="card my-5">
   
              <div class="card-header">
                <h3 class="card-title">Coupon Code</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Coupon Title</th>
                    <th>Dish No</th>
                    <th>Coupon Price</th>
                    <th>Coupon Code</th>
                    <th>Coupon Used</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($coupons as $code)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                     {{ $code->coupon_title }}
                    </td>
                    <td> 
                      {{ $code->dish_id }}
                    <td> 
 {{ $code->coupon_price }}
                    </td>
                    <td> 
 {{ $code->coupon_code }}
                    </td>
                    <td>
                        {{-- @if($code['expired_on'] == '0000-00-00')
                        @else
                        @endif  --}}
                        {{ $code->coupon_used }}
                    </td>
                    <td> 
 {{ $code->added_on }}
                    </td>

                    <td>
  
    @if($code->coupon_status==1) 
    <a class="btn btn-outline-success" href="{{ route('inactive_coupon_code',['coupon_id'=>$code->coupon_id]) }}">
    <i class="fas fa-arrow-up" title="Click to Inactive"></i></a>
    @else 
    <a class="btn btn-outline-info" href="{{ route('active_coupon_code', ['coupon_id'=>$code->coupon_id]) }}">
    <i class="fas fa-arrow-down" title="Click to Active"></i></a>
   @endif  
    <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$code->coupon_id }}">
    <i class="fas fa-edit" title="Click to change it"></i></a>
    <a class="btn btn-outline-danger" href="{{route('delete_coupon_code',['coupon_id'=>$code->coupon_id]) }}">
      <i class="fas fa-trash" title="Click to destroy"></i> </a>
                    </td>
                  </tr>
                  <!------------------- modal start here ---------------------------->
 <div class="modal fade" id="edit{{$code->coupon_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Update Coupon Code</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times</span>
</button>
</div>
<div class="modal-body">
  <form action=" {{ route('update_coupon_code') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="coupon_code" value="{{ $code->coupon_title }}">
<input type="hidden" name="coupon_id" class="form-control" value="{{$code->coupon_id}}">
    </div>
    <div class="form-group">
<label>Dish No</label>
<input type="text" class="form-control" name="dish_id" value="{{ $code->dish_id }}">
</div> 
    <div class="form-group">
        <label>Coupon Price</label>
<input type="text" class="form-control" name="coupon_price" value="{{ $code->coupon_price }}">
    </div>
    
    <div class="form-group">
<label>Coupon Code</label>
<input type="text" class="form-control" name="coupon_code" value="{{ $code->coupon_code }}">
</div>

    <div class="form-group">
<input type="submit" class="btn btn-primary" name="btn" value="Update">
    </div>
  </form>
</div>
</div>
                    </div>

                  </div> 
                  <!----------------------- modal end here ------------------------------>
               @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection