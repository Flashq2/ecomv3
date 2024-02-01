@extends('layouts.app')
@section('style')
@endsection
@section('content')
<div id="content_no_padding" class="slimscroll">
    <?php
    $arrCate = ['Food' => 'food.png', 'Skin Care' => 'skincare.png', 'Any Product' => 'skincare (1).png', 'Car Station' => 'charging-station.png','Food Station' => 'food.png', 'Car ' => 'car.png'];
    ?>
    <div class="control_nva_product">
        <div class="home_screen_nav">
            <div class="nav_detail">
                <div class="nan_user_info">
                    <i class="fa-regular fa-circle-user"></i><span>PUTHEA</span>
                </div>
                <div class="nav_cart">
                    <i class="fa-brands fa-opencart"></i>
                </div>
            
            </div>
            <hr>
            <div class="home_screen_nav_subtitle">
                Your Food  Our Service <br> Checkup
            </div>
        </div>
        <div class="category_box_2">
            <div class="category">
                <input type="text" class="form-control input_login" placeholder="Search Medicine & Health Products">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box_list">
                <div class="box_header">
                    <span class="heaer_title_right">Recommended recipes</span>
                </div>
                <div class="row">
                    <div class="control_menu_slide">
                        <div class="cate_slide">
                            Best Sellers
                        </div>
                        <div class="cate_slide is_active">
                            Pizza Company
                        </div>
                        <div class="cate_slide">
                           Blue Laralser
                        </div>
                        <div class="cate_slide">
                            Mbral isSta
                        </div>
                        <div class="cate_slide">
                            Best Sellers
                        </div>
                        <div class="cate_slide">
                            Best Sellers
                        </div>
                    </div>
                   
                </div>
                <div class="sub_item_list">
                    <div class="sub_item_list_title">
                        Promotion 
                    </div>
                </div>
                <div class="row  p-1">
                    @for ($i = 0; $i < 10; $i++)
                     <div class="col-6">
                        <div class="product_box">
                            <div class="block_image">
                                <div class="block_control_img_style">
                                    <img src="{{ asset('/image/mexican food taco.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="block_title">
                                <div class="is_desc2">Coca Cola</div>
                                <div class="sub_des">
                                    <span class="sub_des_min">24min</span>
                                    <span class="sub_des_rate">  <i class="fa-solid fa-star"></i> 3.5</span>
                                </div>
                                <span class="sub_total"  style="font-size: 14px;margin-left:15px;color:#FC4B6F">$180</span> <span class="before_price" style="font-size: 11px"> $360

                                <div class="is_add_tocard">
                                   <span style="margin-top: -5px">+</span>  
                                </div>
                            </div>
                        </div>
                     </div>
                     @endfor
                     
                </div>

                <div class="sub_item_list">
                    <div class="sub_item_list_title">
                        All Product 
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="sub_detail" style="width: 97%">
                            <div class="sub_detail_header">
                                <span class="sub_detail_title_right">Popular Products</span>
                                <span class="sub_detail_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                            </div>
                            <div class="sub_detail_slide" >
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
                <div class="list_of_all">
                    <div class="sub_detail_header">
                        <span class="sub_detail_title_right">Popular Products</span>
                        <span class="sub_detail_title_left active">SEE ALL <i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                    <div class="list_body">
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="quantity_item">
        <div class="quantity-title">
            <span class="quantity_name">Total / Packages Added</span>
            <span class="quantity_quantity">12 <i class="fa-solid fa-cubes-stacked"></i></span>
        </div>

        <div class="add_button" style="width:29%;">
            <button class="btn active">Add to Order</button>
        </div>
    </div>
</div>
    @include('layouts.app_footer')
@endsection

@section('script')  
<script>
      var swiper = new Swiper(".mySwiper3", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
</script>
@endsection
