@extends('Dashboard.Admin')
@section('content')
    <!doctype html>
    <html>
        <head>
            <style>

                body {
                    background-color: #000
                }

                .padding {
                    padding: 2rem !important
                }

                .card {
                    margin-bottom: 30px;
                    border: none;
                    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
                    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
                    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
                }

                .card-header {
                    background-color: #fff;
                    border-bottom: 1px solid #e6e6f2
                }

                h3 {
                    font-size: 20px
                }

                h5 {
                    font-size: 15px;
                    line-height: 26px;
                    color: #3d405c;
                    margin: 0px 0px 15px 0px;
                    font-family: 'Circular Std Medium'
                }

                .text-dark {
                    color: #3d405c !important
                }

            </style>
        </head>
        <body>

        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
            <div class="card">
                <div class="card-header p-4">
                    <a class="pt-2 d-inline-block" href="{{ url('/') }}" data-abc="true">TWT Food</a>
                    <div class="float-right">
                        <h3 class="mb-0">Receipt #{{ $order->order_id }}</h3>
                        Date: {{ $order->created_at }}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h3 class="text-dark mb-1">TWT Food</h3>
                            <div>29, Singla Street</div>
                            <div>Sikeston,New Delhi 110034</div>
                            <div>Email: contact@bbbootstrap.com</div>
                            <div>Phone: +91 9897 989 989</div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th class="right">Price</th>
                                <th class="center">Qty</th>
                                <th class="right">Total </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @php($sum = 0)
                            @php($subTotal = 0)
                            @php($totalAmount = 0)

                        {{--    @foreach($order_details as $orderD)  --}} 
                                <tr>
                                    <td class="center">{{ $i++ }}</td>
                                    <td class="left strong">{{ $order_details->dish_name }}</td>
                                    <td class="right">$ {{$order_details->price }}</td>
                                    <td class="center">{{ $order_details->dish_quantity }}</td>
                                    <td class="right">$ {{ $subTotal = $order_details->price * $order_details->dish_quantity}}</td>
                                </tr>
                                <tr>
                                    <td colspan="4">subtotal</td>
                                    <td class="right strong">$ {{ $sum = $subTotal + $sum }}</td>
                                </tr>
                                <tr>
                                    <td colspan="4">tax 6%</td>
                                    <td class="right strong">$ {{  $tax = $sum * 0.06 }}</td>
                                </tr>
                                @php($totalAmount = $tax + $sum)
                          {{--   @endforeach  --}}


                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                        </div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">$ {{ $totalAmount}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <p class="mb-0">TWT Food, Sounth Block, New delhi, 110034</p>
                </div>
            </div>
        </div>

        </body>
    </html>

@endsection