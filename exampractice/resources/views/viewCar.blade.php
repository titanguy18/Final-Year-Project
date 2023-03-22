@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <table class="table table-bordered">
            <thead> 
                <tr>
                    <td style="color:white">ID</td>
                    <td style="color:white">Car Name</td>
                    <td style="color:white">Description</td>
                    <td style="color:white">Price</td>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td style="color:white">{{$car->id}}</td>
                    <td style="color:white">{{$car->car}}</td>
                    <td style="color:white">{{$car->description}}</td>
                    <td style="color:white">{{$car->price}}</td>

                    <td><a href ="{{route('deleteCar',['id'=>$car->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;

                    <a href ="{{route('editCar',['id'=>$car->id])}}" class="btn btn-info btn-xs">Edit</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>

@endsection