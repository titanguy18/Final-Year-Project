@extends ('layout')
@section('content')

<div class = "row">
    <div class = "col-sm-2">&nbsp</div>
    <div class = "col-sm-8">
        <form action="{{route('addCategory')}}" method="post"><br><br>@csrf
            <h3>Category name: </h3><input name="catName" type = "text" class="form-control"><br>
            <button type = "submit" class ="btn btn-info">Add Category</button>
        </form>
    </div>
    <div class="col-sm-2">&nbsp</div>
</div>
@endsection