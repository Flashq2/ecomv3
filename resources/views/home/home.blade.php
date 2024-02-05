@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <?php
        $arrCate = ['Food' => 'food.png', 'Skin Care' => 'skincare.png', 'Any Product' => 'skincare (1).png', 'Car Station' => 'charging-station.png','Food Station' => 'food.png', 'Car ' => 'car.png'];
        ?>
        <div class="control_nva">
            <div class="home_screen_nav">
                <div class="nav_detail">
                    <div class="nan_user_info">
                        <i class="fa-regular fa-circle-user"></i><span>PUTHEA</span>
                    </div>
                    <div class="nav_cart">
                        <i class="fa-brands fa-opencart"></i>
                    </div>
                </div>
            </div>
            <div class="category_box">
                <div class="category">
                    <input type="text" class="form-control input_login" placeholder="Search Medicine & Health Products">
                    <div class="row no-gutters">
                        @foreach ($arrCate as $key =>$value)
                            <div class="col-4 p-1">
                                <div class="c_item">
                                    <div class="cate_img">
                                        <img src='{{ asset("/image/$value") }}' alt="">
                                    </div>
                                    <div class="cate_title">
                                        <span>{{$key}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
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
        <?php
        $arrCate = ['Food' => 'thai-food.png', 'Pizza' => 'pizza.png', 'SkinCare' => 'skincare.png', 'Drip' => 'vietnam-drip.png', 'Beer' => 'hop.png', 'Car' => 'car.png'];
        ?>
        <div class="row">
            <div class="col-12">
                <div class="box_list">
                    <div class="box_header">
                        <span class="heaer_title_right">Popular Categories</span>
                        <span class="heaer_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                    
                    <div class="row no-gutters">
                        @foreach ($arrCate as $key => $value)
                            <div class="col-4 p-1">
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

        <div class="row">
            <div class="col-12">
                <div class="sub_detail">
                    <div class="sub_detail_header">
                        <span class="sub_detail_title_right">Popular Products</span>
                        <span class="sub_detail_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                    <div class="sub_detail_slide">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="swiper-slide">
                                        <div class="detail_item_img">
                                            <img src="{{ asset('/image/mexican food mexican.jpg') }}" alt="">
                                        </div>
                                        <div class="detail_item_title">
                                            <div class="item_main_title">
                                                Comprehensive Silver Full Body Checkup
                                            </div>
                                            <div class="detail_item_rate">
                                                <div class="rate_image">
                                                    <img src="{{ asset('/image/top-rated.png') }}" alt="">
                                                </div>
                                                <div class="rate_icon">
                                                    <div class="rate_detail">
                                                        Highest Rate
                                                    </div>
                                                    <div class="rate_stare">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star-half"></i>
                                                        (6899)
                                                    </div>
                                                </div>
                                                <div class="buy_now">
                                                    <span>Buy now</span> <span class="active">special</span><br>
                                                    <span class="sub_total">$180</span> <span class="before_price"> $360
                                                    </span><span class="discount"> 50% Off*</span>
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
        <div class="row">
            <div class="col-12">
                <div class="box_list">
                    <div class="box_header">
                        <span class="heaer_title_right">Featured Brands</span>
                        <span class="heaer_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                    <div class="row no-gutters">
                        @foreach ($arrCate as $key => $value)
                            <div class="col-4 p-1">
                                <div class="box_item">
                                    <div class="f_img">
                                        <img src='{{ asset("/image/$value") }}' alt="">
                                    </div>

                                </div>
                                <div class="box_title">
                                    <span>{{ $key }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="sub_detail">
                    <div class="sub_detail_header">
                        <span class="sub_detail_title_right">Flash Promotion (Up to 50%)</span>
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
        <div class="row">
            <div class="col-12">
                <div class="sub_detail">
                    <div class="sub_detail_header">
                        <span class="sub_detail_title_right">Our Local Product</span>
                        {{-- <span class="sub_detail_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span> --}}
                    </div>
                     <div class="sub_detail_row_list">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="row_list">
                            <div class="row_list_img">
                                <img src='{{asset("/image/f1$i.jpg")}}' alt="">
                            </div>
                            <div class="row_list_title">
                                <span class="row_list_description">What Causing your Blood shot eyes?</span>
                                <p class="row_list_item_name">Croisant of France</p>
                                <div class="supplier">
                                    <div class="supplier_img">
                                            <img src="{{asset('/image/cat.jpg')}}" alt="">
                                    </div>
                                    <div class="supplier_name">
                                        Pok Puthea
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                        @endfor
                           <div class="show_more_list">
                                <button class="btn">Show More</button>
                           </div>   
                     </div>
                </div>
            </div>
        </div>


    </div>

  @include('layouts.app_footer')
@endsection

@section('script')
    <script>
      
    </script>
@endsection
