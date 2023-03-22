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
                </tr>
            </thead>
            <tbody>
                @foreach($information as $information)
                <tr>
                    <td>{{$information->id}}</td>
                    <td>{{$information->Name}}</td>
                    <td>{{$information->Description}}</td>
                    <td>{{$information->Price}}</td>
                    <td>
                    <a href ="{{route('deleteCategory',['id'=>$information->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;

                    <a href ="{{route('deleteinfo',['id'=>$category->id])}}" class="btn btn-info btn-xs">Edit</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection