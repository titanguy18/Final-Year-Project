@extends('layout')
@section('content')

<div class = "row">
    <div class = "col-sm-2">&nbsp</div>
    <div class = "col-sm-8">
        <form action="{{route('addCar')}}" method="post" enctype="multipart/form-data">
            <br><br>@csrf
            <h3 style="color:white"><strong>Add New Inventory</strong></h3>

            <label style="color:white">Name:</label><input name="car" type = "text" class="form-control"><br>
            <label style="color:white">Model:</label><input name="description" type = "text" class="form-control"><br>
            <label style="color:white">Price:</label><input name="price" type = "number" class="form-control"><br>
            <label style="color:white">Quantity:</label><input name="quantity" type = "number" class="form-control"><br>

            <label style="color:white">Car Category:</label><select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Mazda</option>
                <option value="2">Toyota</option>
                <option value="3">Honda</option>
                <option value="4">Nissan</option>
                <option value="5">Euro-Make</option>
                <option value="6">USA</option>
            </select>
            <br>
            <button type = "submit" class ="btn btn-info">Add Car</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp</div>
</div>

@endsection