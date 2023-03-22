@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                    <a href ="{{route('deleteCategory',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;

                    <a href ="{{route('editCategory',['id'=>$category->id])}}" class="btn btn-info btn-xs">Edit</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection