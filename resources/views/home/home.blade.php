@extends('layouts.app')
@section('style')
<style>
    .body_padding_with_with{
        margin-top: 200px;
    }
</style>
@endsection
@section('content')
<?php 
        $arrCate = ['Food' => 'food.png', 'Skin Care' => 'skincare.png', 'Any Product' => 'skincare (1).png', 'Car Station' => 'charging-station.png','Food Station' => 'food.png', 'Car ' => 'car.png'];
        $arrCate = ['Food' => 'thai-food.png', 'Pizza' => 'pizza.png', 'SkinCare' => 'skincare.png', 'Drip' => 'vietnam-drip.png', 'Beer' => 'hop.png', 'Car' => 'car.png'];
?>
    <div id="content_no_padding" class="slimscroll">
        <div class="control_nva">
            <div class="home_screen_nav">
                <div class="header_box">
                    <div class="company_detial">
                        <div class="image">
                            <img src="{{asset('image/blue.png')}}" alt="">
                        </div>
                        <div class="title">
                            <span>blue Technology</span>
                            <span>ប្លូតិចណូ​​ ឡូជី</span>
                            <span class="more_info active">More Info</span>
                        </div>
                    </div>
                    <div class="toast_list_box">
                        <a href="/product_detail">
                        <div class="toast_list_box_title">
                          <i class="fa-solid fa-file-invoice"></i>  &nbsp;Order Detail
                        </div>
                    </a> 
                    </div>
                </div>
                <div class="company_info">
                    
                 </div>
            </div>
             
        </div>
        <div class="body_padding_with_with">
            {{-- Begin Row --}}
            <div class="row">
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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
            {{-- End Row --}}
            
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
                            <div class="row">

                            @for ($i = 0; $i < 10; $i++)
                            <div class="col-xl-4 col-12">
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
                            </div>
                            @endfor
                            </div>

                               <div class="show_more_list">
                                    <button class="btn">Show More</button>
                               </div>   
                         </div>
                    </div>
                </div>
            </div>
        </div>
     

    </div>

  {{-- @include('layouts.app_footer') --}}
@endsection

@section('script')
    <script>
      
    </script>
@endsection
