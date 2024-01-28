@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div class="login_header">
        <div class="context text-right">
            Skip
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="login_body">
                <div class="lbody_image">
                    <img src="{{ '/image/logo.png' }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widjet_bottom">
                <div class="login_form">
                    <div class="title_login">
                        <p>SIGN TO CONTINUE</p>
                    </div>  
                    <div class="login_type">
                        <div class="row">
                            <div class="col-6">
                                <div class="title_login_type active">
                                       <p class="title_type active"> Personal</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="title_login_type">
                                    <p class="title_type">Business</p>
                             </div>
                            </div>
                        </div>
                    </div>
                    <form action="" id="form-login">
                        <input type="text" class="form-control input_login" placeholder="(+885) Enter 10 Digit Mobile Number">
                        <div class="row">
                            <div class="col-12">
                                <div class="btn_login">
                                    <button class="btn btn-info bntSinging">Get Verification Code</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="title_detail_login">
                        <p>Sign In with Email</p>
                    </div>
                    <div class="end_login_detail">
                        By Signing in you Agree to Our <span class=""  style="color: var(--is_main_color);">Terms & Conditions</span> and <span style="color: var(--is_main_color);">Privacy Policy</span>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
    @endsection
