@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <div class="nav_title">
            <i class="fa-solid fa-bars"></i> Order List
        </div>
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

            <div class="order_list_item">
                <div class="order_item_description">
                    <div class="image">
                        <img src="{{ asset('/image/Mexico food.jpg') }}" alt="">
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
                    </div>
                </div>
                <div class="order_item_in-de">
                    <div class="icon-s">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="order_list_item">
                <div class="order_item_description">
                    <div class="image">
                        <img src="{{ asset('/image/Mexico food.jpg') }}" alt="">
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
                    </div>
                </div>
                <div class="order_item_in-de">
                    <div class="icon-r">
                        <i class="fa-solid fa-minus"></i>
                    </div>
                </div>
            </div>

            @for ($i = 0; $i < 10; $i++)
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
            @endfor
        </div>
        <br>
        <div class="quantity_item">
            <div class="quantity-title">
                <span class="quantity_name">Total Payment</span>
                <span class="quantity_quantity"> 30 <i class="fa-solid fa-dollar-sign"></i></span>
            </div>

            <div class="add_button" style="width:29%;">
                <button class="btn active">Submit Order</button>
            </div>
        </div>
    </div>
    @include('layouts.app_footer')
@endsection

@section('script')
@endsection
