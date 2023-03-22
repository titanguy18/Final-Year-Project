@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addInfo')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
            <h3>Room Information</h3><br>
            <div class="row">
            <label>ID: <input type="text" name="ID"></label>&nbsp;
            <label>Name: <input type="text" name="Name"></label>&nbsp;
            <label>Description: <input type="text" name="Description"></label>&nbsp;
            <label>Price: <input type="text" name="Price"></label><br><br>
            <button type="submit" class="btn btn-info" style="width:70px;">Insert</button><br><br>
            </div>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection