 @extends('users_template.layouts.template')
 @section('page-title')
     Home | EcomSite
 @endsection
 @section('banner-slider')
     <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <div class="row">
                     <div class="col-sm-12">
                         <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="row">
                     <div class="col-sm-12">
                         <h1 class="banner_taital">Get Start <br>YYour favourite shopping</h1>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="row">
                     <div class="col-sm-12">
                         <h1 class="banner_taital">Get Start <br>Your favourite shopping</h1>
                     </div>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right"></i>
         </a>
     </div>
 @endsection
 @section('main-content')
     <!-- electronic section start -->
     @foreach ($categories as $category)
         <div class="fashion_section">
             <div id="main_slider" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="fashion_section_2">
                             <div class="row">
                                 <h1 class="fashion_taital">{{ $category->category_name }}</h1>
                                 <div class="owl-carousel owl-theme">
                                     @php
                                         $allproducts = App\Models\Products::where('category_id', $category->id)->get();
                                     @endphp
                                     @foreach ($allproducts as $product)
                                         <div class="item">
                                             <div class="box_main">
                                                 <div class="electronic_img mt-2">
                                                     <img src="{{ asset($product->product_img) }}"style="height:300px">
                                                 </div>
                                                 <div class="box-header">
                                                     <h4 class="shirt_text">{{ $product->product_name }}</h4>
                                                     <p class="price_text">Start Price <span style="color: #262626;">$
                                                             {{ $product->price }}</span></p>
                                                 </div>
                                                 <p class="lead">
                                                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                                                     distinctio rem ad aut reprehenderit.
                                                 </p>
                                                 <div class="btn_main">
                                                     <div class="buy_bt">
                                                         <form action="{{ route('addtocart') }}" method="POST">
                                                             @csrf
                                                             <input type="hidden" value="{{ $product->id }}"
                                                                 name="product_id">
                                                             <input type="hidden" name="quantity" min="1"
                                                                 value="1">
                                                             <input class="btn bg-transparent text-warning" type="submit"
                                                                 value="Buy Now">
                                                         </form>
                                                     </div>
                                                     <div class="seemore_bt"><a
                                                             href="{{ route('productdetails', [$product->id, $product->slug]) }}">See
                                                             More</a></div>
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
         </div>
     @endforeach
 @endsection
 @section('script')
     <script>
         $('.owl-carousel').owlCarousel({
             loop: true,
             autoplay: true,
             center: true,
             margin: 10,
             nav: false,
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 2
                 },
                 1000: {
                     items: 3
                 }
             }
         })
     </script>
 @endsection
