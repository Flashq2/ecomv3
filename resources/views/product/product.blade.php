@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <?php
        $arrCate = ['Food' => 'food.png', 'Skin Care' => 'skincare.png', 'Any Product' => 'skincare (1).png', 'Car Station' => 'charging-station.png', 'Food Station' => 'food.png', 'Car ' => 'car.png'];
        ?>
        <div class="control_nva">
            <div class="home_screen_nav">
                <div class="nav_detail">
                    <div class="nan_user_info">
                        <i class="fa-regular fa-circle-user"></i><span>blue Technology</span>
                    </div>
                    <div class="nav_cart"><a href="{{url('/product')}}"> <i class="fa-brands fa-opencart"></i></a>
                       
                    </div>
                    
                </div>
                <div class="company_info">
                    
                 </div>
            </div>
             
        </div>
        <div class="body_padding_with_with">
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
                            @for ($i = 0; $i < 12; $i++)
                                <div class="col-lg-3 col-md-4 col-6">
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
                                                <span class="sub_des_rate"> <i class="fa-solid fa-star"></i> 3.5</span>
                                            </div>
                                            <span class="sub_total"
                                                style="font-size: 14px;margin-left:15px;color:#FC4B6F">$180</span> <span
                                                class="before_price" style="font-size: 11px"> $360
    
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
                        <div class="list_of_all">
                            <div class="sub_detail_header">
                                <span class="sub_detail_title_right">Popular Products</span>
                                <span class="sub_detail_title_left active">SEE ALL <i
                                        class="fa-solid fa-chevron-right"></i></span>
                            </div>
                            <div class="row">
                                @for ($i = 0; $i < 12; $i++)
                                <div class="col-lg-4 col-md-6 col-12 col-sm-12">
                                    <div class="list_body">
                                        <div class="list_body_box">
                                            <div class="list_box_image">
                                                <div class="image">
                                                    <img src="{{ asset('/image/mexican food mexican.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="list_box_title">
                                                <div class="top_title">
                                                    The Coca Cola
                                                </div>
                                                <div class="top_title_2">
                                                    Also known as covid -19 Antibody detection Test
                                                </div>
                                                <span class="rate_stare" style="color: #FAC213;"><i class="fa-solid fa-truck"></i>
                                                    Free
                                                    Delivery</span>
                                                <div class="rate_stare">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                                    ( <i class="fa-regular fa-user"></i> 6899)
                                                </div>
                                                <div class="add_button_of_list">
                                                    <button class="btn active">Add to Cart</button>
                                                </div>
                                                
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
        </div>
        
    </div>
    <br>
    <div class="quantity_item">
        <div class="quantity-title">
            <span class="quantity_name">Total / Packages Added</span>
            <span class="quantity_quantity">12 <i class="fa-solid fa-cubes-stacked"></i></span>
        </div>
        <div class="add_button" style="width:200px;" id="add_and_link">
            <button class="btn active">Add to Order</button>
        </div>
    </div>
    @include('layouts.option')
@endsection

@section('script')
    <script></script>
@endsection
