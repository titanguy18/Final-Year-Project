@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <h3>Edit Category</h3>
        <form action="{{route('addCategory')}}" method="post" ><br><br> @csrf
            <h3>Category name</h3> 
            <input name="catID" type="text" class="form-control" value="{{$category->id}}" readonly><br>
            <input name="catName" type="text" class="form-control" value="{{$category->name}}"><br>
            @endforeach
            <button type="submit" class="btn btn-info">Update Room</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection