@extends('users_template.layouts.user_profile_template')
@section('page-title')
    Add To Cart | EcomSite
@endsection
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <h2>Cart Items Details</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart_items as $item)
                                @php
                                    $product_name = App\Models\Products::where('id', $item->product_id)->value('product_name');
                                    $image = App\Models\Products::where('id', $item->product_id)->value('product_img');
                                    $tprice = $item->quantity * $item->price;
                                @endphp
                                <tr class="text-center">
                                    <td class="text-left">{{ $product_name }}</td>
                                    <td><img src="{{ asset($image) }}" alt="{{ $product_name }}" style="height: 30px;"></td>
                                    <td>{{ number_format($item->price, 2) }}</td>
                                    <td>
                                        @if ($item->quantity > 1)
                                            <a href="{{ route('minuscartitem', $item->id) }}"><i class="fa fa-minus-square"></i></a>
                                        @else
                                            <i class="fa fa-minus-square"></i>
                                        @endif
                                        {{ $item->quantity }}
                                        <a href="{{ route('pluscartitem', $item->id) }}"><i class="fa fa-plus-square"></i></a>
                                    </td>
                                    <td>{{ number_format($tprice, 2) }}</td>
                                    <td>
                                        <a href="{{ route('removecartitem', $item->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php
                                    $total = $total + $tprice;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <td>
                                    <a href="/" class="btn btn-success"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                </td>
                                <td colspan="3" class="text-left"><b>Total:</b></td>
                                <td><b>{{ number_format($total, 2) }}</b></td>
                                <td>
                                    <a href="" class="btn btn-success">Checkout <i class="fa fa-arrow-right"></i></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
