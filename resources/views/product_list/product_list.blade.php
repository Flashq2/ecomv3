@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
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
            <div class="status">
                <div class="box_of_status">
                    Upcoming
                </div>
                <div class="box_of_status_no_active">
                    Last Order
                </div>
            </div>
            <div class="order_list">
                <div class="box_header">
                    <span class="heaer_title_right" style="font-size: 14px">List of Orders</span>
                </div>
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-6 col-12">
                    <div class="order_list_item">
                        <div class="order_item_description">
                            <div class="image">
                                <img src="{{ asset('/image/Nicoise salade.jpg') }}" alt="">
                            </div>
                            <div class="title">
                                <div class="title-s1">
                                    Diabetes Screening
                                </div>
                                <div class="title-s2">
                                    Related to Pancreas 
                                </div>
                                <div class="title-s3">
                                    10 orders in list
                                </div>
        
                                <div class="title-s4">
                                    $ 90.10
                                </div>
                            </div>
                        </div>
                        <div class="order_item_in-de">
                            <div class="icon-s">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                           
                        </div>
                    </div>
                </div>
    
                    @endfor
                        
                </div>
    
            </div>
        </div>
        
        <br>
        <div class="quantity_item">
            <div class="quantity-title">
                <span class="quantity_name">Total Payment</span>
                <span class="quantity_quantity"> 30 <i class="fa-solid fa-dollar-sign"></i></span>
            </div>

            <div class="add_button" style="width:200px;">
                <button class="btn active">Submit Order</button>
            </div>
        </div>
    </div>
    @include('layouts.app_footer')
@endsection

@section('script')
@endsection
