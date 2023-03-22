@extends('Dashboard.Admin')

@section('title')
   Analysis Page
   @endsection

@section('content')
        <div class="row">
            <div class="col-md-12 grid-margin">
                @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }},</h6>
                @endif

                <div class="me-md-3 me-x1-5"><br>
                    <h2>Dashboard</h2>
                    <p class="mb-md-0">Analysis Status of Order</p>
                    <hr>
                </div>
            

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total Orders</label>
                    <h1>{{ $totalOrder }}</h1>
                    <a href="{{ url('/order/manage') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Today Orders</label>
                    <h1>{{ $todayOrder }}</h1>
                    <a href="{{ url('/order/manage') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>This Month Orders</label>
                    <h1>{{ $thisMonthOrder }}</h1>
                    <a href="{{ url('/order/manage') }}" class="text-white">view</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label>Year Orders</label>
                    <h1>{{ $thisYearOrder }}</h1>
                    <a href="{{ url('/order/manage') }}" class="text-white">view</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection