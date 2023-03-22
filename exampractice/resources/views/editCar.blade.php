@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <h3 align="center" style="color:white">Edit Car</h3>
       
        <form action="{{route('updateCar')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
        
            <h3 style="color:white">Item Name</h3> 
            @foreach($cars as $car)
           <!-- <button type="submit" class="btn btn-info">Update Product</button><br><br>  -->
            <input name="id" type="number" class="form-control" value="{{$car->id}}"><br>

            <input name="car" type="text" class="form-control" value="{{$car->car}}"><br>

            <input name="description" type="text" class="form-control" value="{{$car->description}}"><br>

            <input name="quantity" type="text" class="form-control" value="{{$car->quantity}}"><br>

            <input name="price" type="text" class="form-control" value="{{$car->price}}"><br>

            @endforeach
            
            <button type="submit" class="btn btn-info">Update Car</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection