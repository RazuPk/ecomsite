@extends('users_template.layouts.user_profile_template')
@section('page-title')
    Pending | EcomSite
@endsection
@section('profilecontent')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box_main">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @foreach ($orders_info as $orders)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="5" class="text-center">Order Details</th>
                                </tr>
                                <tr class="text-left">
                                    <th colspan="3" class="align-top">
                                        <p class="mt-1">
                                            Delivered To. <br>
                                            {{ $user_name }}, <br>
                                            Address:
                                            {{ $orders->shipping_address . ', ' . $orders->city . ', ' . $orders->district }} <br>
                                            Phone No: {{ $orders->mobile_no }}
                                        </p>
                                    </th>
                                    <th colspan="2" class="align-top">
                                        <p class="mt-0">
                                            @php
                                                $cdate = date('d-m-Y', strtotime($orders->created_at));
                                            @endphp
                                            Order ID: {{ $orders->id }} <br>
                                            Date: {{ $cdate }}
                                            Status:{{ ($orders->status == 1) ? 'Pending' : 'Approved' }}
                                        </p>
                                    </th>
                                </tr>
                                <tr class="text-center">
                                    <th>Items</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $ordersDetails = App\Models\OrderDetails::where('order_id', $orders->id)->get();
                                    $n = 1;
                                    $total = 0;
                                @endphp
                                @foreach ($ordersDetails as $item)
                                    @php
                                        $product_name = App\Models\Products::where('id', $item->product_id)->value('product_name');
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $n++ }}</td>
                                        <td>{{ $product_name }}</td>
                                        <td class="text-center">{{ number_format($item->price, 2) }}</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-center">{{ number_format($item->price * $item->quantity, 2) }}</td>
                                    </tr>
                                    @php
                                        $total = $total + ($item->price * $item->quantity);
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Total:</td>
                                    <td class="text-center"><b>{{ number_format($total,2) }}</b></td>
                                </tr>
                            </tfoot>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
