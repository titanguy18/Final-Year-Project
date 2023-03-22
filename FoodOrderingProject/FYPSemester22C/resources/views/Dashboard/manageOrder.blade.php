@extends('Dashboard.Admin')
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
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Customer Name</th>
                    <th>Order Total</th>
                    <th>Order Status</th>
                    <th>Order Date</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($orders as $order)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                     {{ $order->name }}
                    </td>
                    <td> 
                         {{ $order->order_total }}
                    </td>
                    <td> 
                         {{ $order->order_status }}
                    </td>
                    <td> 
                         {{ $order->created_at }}
                    </td>
                    <td> 
                         {{ $order->payment_type }}
                    </td>
                    <td> 
                         {{ $order->payment_status }}
                    </td>
                 {{--     <td> 
                        <img src="{{ asset('/BackEndSourceFile/dish_img')}}/{{ $dish->dish_image }}" height="25" width="60" class="img-fluid img-thumbnail" alt="">
                    </td> --}}
                   
                    <td>

    <a class="btn btn-outline-success" href="{{ route('view_order',['order_id'=>$order->order_id]) }}" >
    <i class="fas fa-search" title="View Order Detail"></i></a>
  
    <a class="btn btn-outline-info mt-1" href=" {{ route('view_order_invoice', ['order_id'=>$order->order_id]) }}">
    <i class="fas fa-search-plus" title="View Invoice"></i></a>

    <a class="btn btn-outline-primary mt-1" href="  {{ route('download_order_invoice', ['order_id'=>$order->order_id]) }} ">
    <i class="fas fa-arrow-circle-down" title="Download Invoice"></i></a>

    <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{-- {{$dish->dish_id }} --}}">
    <i class="fas fa-edit" title="Click to change it"></i></a>
    <a class="btn btn-outline-danger mt-1 " id="delete" href="{{route('delete_order',['order_id'=>$order->order_id]) }}">
      <i class="fas fa-trash" title="Click to destroy"></i> </a>
                    </td> 
 </tr> 
                  <!------------------- modal start here ---------------------------->
{{-- 
<div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
       <div class="modal-content">
       <div class="modal-header">
       <h5 class="modal-title">Update Dish Data</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times</span>
       </button>
       </div>
       <div class="modal-body">
  <form action=" {{ route('update_dish') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" name="dish_name" value="{{ $dish->dish_name }}">
       <input type="hidden" name="dish_id" class="form-control" value="{{$dish->dish_id}}">
    </div>
    <div class="form-group">
       <label>Previous Category</label>
       <input type="text" class="form-control" value="{{ $dish->category_name }}">
       <label>Category</label>
       <select class="form-control" name="category_id">
               <option>----Select Category----</option>
           @foreach($categories as $cate)
           <option value="{{ $cate->category_id }}"> {{ $cate->category_name }}</option>
       @endforeach
       </select>
       </div> 
       <div class="form-group">
       <label>Detail</label>
       <textarea type="text" name="dish_detail" class="form-control" rows="5">{{ $dish->dish_detail }}
       </textarea>
       </div> 
           <div class="form-group">
       <label>Previous Image</label>
       <img src="{{ asset('/BackEndSourceFile/dish_img/')}}/{{ $dish->dish_image }}" style="height: 150px; width: 150px; border-radius: 50%;" alt="">
       <input type="file" class="form-control" name="dish_image" accept="image/*">
       </div> 
       <div class="card">
       <div class="card-header">Dish Attribute</div>
       <div class="card-body">
       <div class="form-group">
       <div class="row">
       <div class="col-md-6">
       <input type="text" class="form-control" name="full" value="{{ $dish->full }}">
       </div>
       <div class="col-md-6">
       <input type="text" class="form-control" name="full_price" value="{{ $dish->full_price }}">
       </div>
       <div class="col-md-6 mt-2">
       <input type="text" class="form-control" name="half" value="{{ $dish->half }}">
       </div>
       <div class="col-md-6 mt-2">
       <input type="text" class="form-control" name="half_price" value="{{ $dish->half_price }}">
       </div>
       </div>
       </div>
       </div>
       </div>
           <div class="form-group">
       <input type="submit" class="btn btn-outline-primary btn-block" name="btn" value="Update">
           </div>
         </form>
       </div>
       </div>
                           </div>
</div>  --}}
                         <!----------------------- modal end here ------------------------------>
               @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection