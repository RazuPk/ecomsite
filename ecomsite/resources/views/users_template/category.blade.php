@extends('users_template.layouts.template')
@section('page-title')
    Category | EcomSite
@endsection
@section('main-content')
    <div class="container">
        <div class="fashion_section">
            <div id="main_slider">
                <div class="container">
                    <h2 class="fashion_taital">{{ $category->category_name }}-({{ $category->product_count }})</h2>
                    <div class="fashion_section_2">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{ $product->product_name }}</h4>
                                        <p class="price_text">Price <span style="color: #262626;">$
                                                {{ $product->price }}</span></p>
                                        <div class="tshirt_img"><img src="{{ asset($product->product_img) }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="{{ route('productdetails', [$product->id, $product->slug]) }}">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
