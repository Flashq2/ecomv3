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
            </div>
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
