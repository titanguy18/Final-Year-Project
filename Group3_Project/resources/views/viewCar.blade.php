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
                    
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="exportexcel"><button type = "export" class ="btn btn-info">Export Data</button><br><br>
    </div>
</div>

@endsection