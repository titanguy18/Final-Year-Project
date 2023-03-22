@extends('layout')
@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-sm-4">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <a href="{{route('showProductDetail',['id'=>$product->id])}}">
            <img src="{{asset('image')}}/{{$product->image}}" alt="" class="img-fluid"></a>
            <div class="card-heading">RM {{$product->price}}</div>
            <button class="btn btn-danger btn-xs">Add to Cart</button>
        </div>
    </div>
    @endforeach
</div>

@endsection