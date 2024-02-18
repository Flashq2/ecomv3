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
                Profiles
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="user_detail">
                    <div class="image_border">
                         <img src="{{ asset('/image/user-profile.png') }}" alt="">
                    </div>
                    <div class="title">
                         <div class="email">
                             Virginia G. Bennett
                         </div>
                         <div class="user_name">
                            pokputhea2@gmail.com
                         </div>
                         <div class="member_of">
                             Registered Since Dec 202X
                          </div>
                    </div>
                    <div class="icon">
                         <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    
             </div>
            </div>
        </div>
       
    </div>
    <?php
    $arrCate = [
        'My Order' => '<i class="fa-solid fa-chart-gantt"></i>', 
        'My Wishlist' => '<i class="fa-solid fa-clipboard-list"></i>',
        'My Product Order' => '<i class="fa-solid fa-calendar-day"></i>',
        'Your Addresses' => '<i class="fa-regular fa-address-book"></i>',
        'My Point' => '<i class="fa-regular fa-star"></i>',
        ];
    ?>
    <div class="body_padding_with_no_margin">
        <div class="sumary_user_info">
            <div class="row no-gutter">
                <div class="col-md-4 col-12" >
                    <div class="box box1_gradient">
                        <div class="box_content">
                            <div class="box_content_header">
                                <div class="title">
                                    Current Balance
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="box_content_body">
                                <div class="total_box">
                                     C
                                </div>
                                <div class="total_price">
                                   $ 1000.00
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <div class="from">
                                    From
                                </div>
                                <div class="todate">
                                    <i class="fa-regular fa-calendar"></i>    Oct-2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box box2_gradient">
                        <div class="box_content">
                            <div class="box_content_header">
                                <div class="title">
                                    Point 
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="box_content_body">
                                <div class="total_box">
                                     P
                                </div>
                                <div class="total_price">
                                      200.00
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <div class="from">
                                    From
                                </div>
                                <div class="todate">
                                    <i class="fa-regular fa-calendar"></i>    Oct-2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box box3_gradient" >
                        <div class="box_content">
                            <div class="box_content_header">
                                <div class="title">
                                    Last Order
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="box_content_body">
                                <div class="total_box">
                                     L
                                </div>
                                <div class="total_price">
                                      $  18900.90
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <div class="from">
                                    From
                                </div>
                                <div class="todate">
                                    <i class="fa-regular fa-calendar"></i>    Oct-2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box box4_gradient">
                        <div class="box_content">
                            <div class="box_content_header">
                                <div class="title">
                                    Total Order
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="box_content_body">
                                <div class="total_box">
                                     T
                                </div>
                                <div class="total_price">
                                      $  18900.90
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <div class="from">
                                    From
                                </div>
                                <div class="todate">
                                    <i class="fa-regular fa-calendar"></i>    Oct-2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box box4_gradient">
                        <div class="box_content">
                            <div class="box_content_header">
                                <div class="title">
                                    Total Order
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                            <div class="box_content_body">
                                <div class="total_box">
                                     T
                                </div>
                                <div class="total_price">
                                      $  18900.90
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <div class="from">
                                    From
                                </div>
                                <div class="todate">
                                    <i class="fa-regular fa-calendar"></i>    Oct-2024
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_user_detail">
            <div class="row">
                @foreach ($arrCate as $key => $item)
                <div class="col-12">
                    <div class="list">
                        <div class="icon">{!!  $item !!}</div>    
                        <div class="text">
                            {{$key }}
                        </div>
                    </div>
                </div>
                @endforeach
               
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
