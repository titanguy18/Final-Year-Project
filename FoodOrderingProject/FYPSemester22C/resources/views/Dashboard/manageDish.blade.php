@extends('Dashboard.Admin')
@section('title')
Delivery Boy Manage
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
                <h3 class="card-title">Delivery Boy Manage</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Dish Name</th>
                    <th>Category Name</th>
                    <th>Dish detail</th>
                    <th>Dish image</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($dishes as $dish)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                     {{ $dish->dish_name }}
                    </td>
                    <td> 
                         {{ $dish->category_name }}
                    </td>
                    <td> 
                         {{ $dish->dish_detail }}
                    </td>
                    <td> 
                        <img src="{{ asset('/images/dish_img')}}/{{ $dish->dish_image }}" height="25" width="60" class="img-fluid img-thumbnail" alt="">
                    </td>
                    <td> 
                         {{ $dish->added_on }}
                    </td>

                    <td>

    @if($dish->dish_status==1) 
    <a class="btn btn-outline-success" href="{{ route('dish_inactive',['dish_id'=>$dish->dish_id]) }}">
    <i class="fas fa-arrow-up" title="Click to Inactive"></i></a>
    @else 
    <a class="btn btn-outline-info" href="{{ route('dish_active', ['dish_id'=>$dish->dish_id]) }}">
    <i class="fas fa-arrow-down" title="Click to Active"></i></a>
   @endif 
    <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$dish->dish_id }}">
    <i class="fas fa-edit" title="Click to change it"></i></a>
    <a class="btn btn-outline-danger" href="{{route('delete_dish',['dish_id'=>$dish->dish_id]) }}">
      <i class="fas fa-trash" title="Click to destroy"></i> </a>
                    </td>
                  </tr> 
                  <!------------------- modal start here ---------------------------->
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
<input type="text" class="form-control" name="price" value="{{ $dish->price }}">
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

                  </div> 
                  <!----------------------- modal end here ------------------------------>
               @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection