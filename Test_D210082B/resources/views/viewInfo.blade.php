@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($informations as $information)
                <tr>
                    <td>{{$information->id}}</td>
                    <td>{{$information->name}}</td>
                    <td>{{$information->description}}</td>
                    <td>{{$information->price}}</td>
                    <td><a href="{{route('deleteInfo', ['id' => $information->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are You Sure To Delete?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection