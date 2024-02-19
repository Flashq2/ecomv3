@extends('layouts.app')
@section('style')
    <style>
        .swiper-pagination-bullets {
            display: block;
        }
    </style>
    <?php 
    $arrCate = ['Food' => 'food.png', 'Skin Care' => 'skincare.png', 'Any Product' => 'skincare (1).png', 'Car Station' => 'charging-station.png','Food Station' => 'food.png', 'Car ' => 'car.png'];
    $arrCate = ['Food' => 'thai-food.png', 'Pizza' => 'pizza.png', 'SkinCare' => 'skincare.png', 'Drip' => 'vietnam-drip.png', 'Beer' => 'hop.png', 'Car' => 'car.png'];
?>
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <div class="nav_user_detail">
            <div class="title">
                <div class="icon" id="drawer">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="text">
                    Product
                </div>
            </div>

        </div>

        <div class="body_padding_with_no_margin">
            <div class="row">
                <div class="col-12">
                    <div class="is_manage_slide">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="swiper-slide">
                                        <img src='{{ asset("/image/photo_$i.jpg") }}' alt="">
                                    </div>
                                @endfor
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single_product_detail">
                        <div class="main_title">
                            Nutracitta Biotin Beauty Blend - Multivitamins Gummies- Vitamin A, B7, B12, C, E & Zinc
                        </div>
                        <div class="sub_title">
                            by blueTechnology 
                        </div>
                        <div class="rate_stare">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half"></i>
                                 4.5 (10002 Rating | 100 Reviewss)
                        </div>
                        <div class="best_seller">
                            <div class="taost">
                                BEST SELLER
                            </div>
                            <div class="title">
                                In cambodia
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="promo_code">
                        <div class="data">
                            <div class="radio-item">
                                <input type="radio" id="ritembs" name="ritems" value="ropt" checked>
                                <label for="ritems"></label>
                            </div>
                            <div class="data_title">$99.00</div>
                            <div class="shippin_detail" style="float: right;">
                                + Shipping Fee $10 and 5% Extra MediQem Coin
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="promo_code">
                        <div class="data">
                            <div class="radio-item">
                                <input type="radio" id="ritembs" name="ritems" value="ropt" checked>
                                <label for="ritems"></label>
                            </div>
                            <div class="data_title">$99.00</div>
                            <div class="shippin_detail" style="float: right;">
                                + Shipping Fee $10 and 5% Extra MediQem Coin
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="sub_detail">
                        <div class="sub_detail_header">
                            <span class="sub_detail_title_right">Similar Product</span>
                            <span class="sub_detail_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                        <div class="sub_detail_slide_item_discount">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    @for ($i = 0; $i < 5; $i++)
                                        <div class="swiper-slide">
                                            <div class="detail_item_img">
                                                <img src="{{ asset('/image/mexican food taco.jpg') }}" alt="">
                                            </div>
                                            <div class="detail_item_title">
                                                <div class="item_main_title">
                                                    Comprehensive Silver Full Body Checkup
                                                </div>
                                                <div class="detail_item_rate">
                                                    <div class="rate_icon">
                                                        <div class="rate_detail">
                                                            Highest Rate
                                                        </div>
                                                        <div class="rate_stare_yellow">
                                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                                class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i><i
                                                                class="fa-solid fa-star-half"></i>
                                                            (6899)
                                                        </div>
                                                    </div>
                                                    <div class="buy_now">
                                                    
                                                        <span class="sub_total">$180</span> <span class="before_price"> $360
                                                        </span><span class="discount"> 50% Off*</span>
                                                    </div>
                                                    <div class="add_to_card">
                                                        
                                                        <div class="add_button">
                                                            <button class="btn active">Add to Cart</button>
                                                        </div>
                                                        <div class="add_to_favorite">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="box_list">
                            <div class="box_header">
                                <span class="heaer_title_right">Popular Categories</span>
                                <span class="heaer_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                            </div>
                            
                            <div class="row no-gutters">
                                @foreach ($arrCate as $key => $value)
                                    <div class="col-md-4 col-sm-4 col-4 p-1">
                                        <div class="box_item">
                                            <div class="box_img">
                                                <img src='{{ asset("/image/$value") }}' alt="">
                                            </div>
                                            <div class="box_title">
                                                <span>{{ $key }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
            --}}
            </div>
        </div>
       @include('layouts.drawer')
    @endsection

    @section('script')
    @endsection
