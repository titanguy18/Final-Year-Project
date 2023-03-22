@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <h3>Edit Product</h3>
        @foreach($products as $product)
        <form action="{{ url('updateProduct/'.$product->id) }}" method="post" enctype="multipart/form-data"><br><br> @csrf
        @method('PUT')
            <h3>Product name</h3> 
           <!-- <button type="submit" class="btn btn-info">Update Product</button><br><br>  -->
            <input name="id" type="number" class="form-control" value="{{$product->id}}"><br>
            <input name="productName" type="text" class="form-control" value="{{$product->name}}"><br>
            <input name="description" type="text" class="form-control" value="{{$product->description}}"><br>
            <input name="price" type="text" class="form-control" value="{{$product->price}}"><br>
            <input name="quantity" type="text" class="form-control" value="{{$product->quantity}}"><br>
           
            Image:<input name="image" type = "file" class="form-control"><br>
            <img src="{{asset('image')}}/{{$product->image}}" alt="" class="img-fluid">

            @endforeach
            
            <button type="submit" class="btn btn-info">Update Product</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection