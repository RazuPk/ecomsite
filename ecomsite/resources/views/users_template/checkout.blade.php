@extends('users_template.layouts.template')
@section('page-title')
    Checkout | EcomSite
@endsection
@section('banner-slider')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="box_main pt-1">
                    <p>
                        <h2>Delivered To:</h2>
                        Name: {{ $user_name }}<br>
                        Address: {{ $shipping_info->shipping_address }},<br>
                        City & District: {{ $shipping_info->city }}, {{ $shipping_info->district }}<br>
                        Contact No: {{ $shipping_info->mobile_no }}
                    </p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="box_main">
                    <h2>Order Details</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Items</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                                $n = 1;
                            @endphp
                            @foreach ($cart_items as $item)
                                @php
                                    $product_name = App\Models\Products::where('id', $item->product_id)->value('product_name');
                                    $image = App\Models\Products::where('id', $item->product_id)->value('product_img');
                                    $tprice = $item->quantity * $item->price;
                                @endphp
                                <tr class="text-center">
                                    <td>{{ $n++ }}</td>
                                    <td class="text-left">{{ $product_name }}</td>
                                    <td><img src="{{ asset($image) }}" alt="{{ $product_name }}" style="height: 30px;"></td>
                                    <td>{{ number_format($item->price, 2) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ number_format($tprice, 2) }}</td>
                                </tr>
                                @php
                                    $total = $total + $tprice;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <td colspan="5" class="text-right"><b>Total:</b></td>
                                <td><b>{{ number_format($total, 2) }}</b></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="6" class="text-right">
                                    <a href="{{ route('placeorder') }}" class="btn btn-success">Place Order</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
