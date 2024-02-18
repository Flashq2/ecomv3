@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <div class="nav_user_detail">
            <div class="title">
                <div class="icon" id="drawer">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="text">
                    Cart
                </div>
            </div>
        </div>
        <div class="body_padding_with_no_margin">
            <div class="menbership">
                <div class="image_controler">
                    <img src="{{ asset('/image/top-rated.png') }}" alt="">
                </div>
                <div class="title">
                    <div class="main">Join Membership to Save More.!</div>
                    <div class="sub">Exclusive offers Designed for you.</div>
                </div>
            </div>
            <div class="product_in_cart">
                <div class="row">
                    <div class="col-12">
                        <div class="title_header">
                            Products
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="product_box_cart">
                            <div class="product_box_img">
                                <img src="{{ asset('/image/mexican food mexican.jpg') }}" alt="">
                            </div>
                            <div class="product_box_title">
                                <div class="main">
                                    Neuherbs Hair-Skin Vitamin 60 N Capsules
                                </div>
                                <div class="sub active" >
                                    blueTechnology
                                </div>
                                <div class="sub2">
                                    <div class="product_price">
                                        $ 50.00
                                    </div>
                                    <div class="increate_product">
                                            <div class="_is_increas">+</div> 
                                            <div class="_is_amount">10</div> 
                                            <div class="_is_decreas">-</div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="three_button_under">
                            <span>EDIT</span>
                            <span>REMOVE</span>
                            <span>Move to Wishlist</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="product_box_cart">
                            <div class="product_box_img">
                                <img src="{{ asset('/image/mexican food mexican.jpg') }}" alt="">
                            </div>
                            <div class="product_box_title">
                                <div class="main">
                                    Neuherbs Hair-Skin Vitamin 60 N Capsules
                                </div>
                                <div class="sub active" >
                                    blueTechnology
                                </div>
                                <div class="sub2">
                                    <div class="product_price">
                                        $ 50.00
                                    </div>
                                    <div class="increate_product">
                                            <div class="_is_increas">+</div> 
                                            <div class="_is_amount">10</div> 
                                            <div class="_is_decreas">-</div> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="three_button_under">
                            <span>EDIT</span>
                            <span>REMOVE</span>
                            <span>Move to Wishlist</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="add_more_action">
                            <span>Add More Items</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="promo_code">
                        <div class="data">
                            <div class="image_controler">
                                <img src="{{ asset('/image/top-rated.png') }}" alt="">
                            </div>
                            <div class="data_title">Apply Coupon</div>
                            <div class="icon" style="float: right;">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <div class="inovice">
                            <div class="title_header">
                                Payment Details
                            </div>
                            <div class="row_of_total">
                                <div class="title">Sub Total</div>
                                <div class="amount">$ 100.89</div>
                            </div>
                            <div class="row_of_total">
                                <div class="title">Discount Amount</div>
                                <div class="amount">$ 10.00</div>
                            </div>
                            <div class="row_of_total">
                                <div class="title">VAT Total</div>
                                <div class="amount">$ 9.89</div>
                            </div>
                            <div class="row_of_total">
                                <div class="total">Total</div>
                                <div class="total_amount">$ 100.89</div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
        <div class="row">
            <div class="drawer">
                
            </div>
        </div>

    </div>
@endsection
@section('script')
@endsection
