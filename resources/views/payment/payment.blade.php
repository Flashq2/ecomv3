@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <div id="content_no_padding" class="slimscroll">
        <div class="nav_title">
            <i class="fa-solid fa-bars"></i> Payment Method
        </div>
        <div class="payment_content">
            <div class="seach_box">
                <input type="text" class="form-control input_login" placeholder="Search Your Account ...">
            </div>


            <div class="list_of_bank">
                <div class="bank">
                    <div class="radio-item">
                        <input type="radio" id="ritembs" name="ritems" value="ropt">
                        <label for="ritems"></label>
                    </div>
                    <div class="back_image">
                        <img src="{{ asset('https://www.ababank.com/typo3conf/ext/boxmodel/Resources/Private/Templates/ABA/images/aba-web-top-logo.png') }}" alt="">
                    </div>
                    <div class="bank_title">
                        ABA bank of Cambodia
                    </div>
                </div>
                
                <div class="bank">
                    <div class="radio-item">
                        <input type="radio" id="ritemb" name="ritem" value="ropt2">
                        <label for="ritemb"></label>
                    </div>  
                    <div class="back_image">
                        <img src="https://www.acledabank.com.kh/kh/assets/layout/logo-white.png" alt="">
                    </div>
                    <div class="bank_title">
                        Aclida bank of Cambodia 
                    </div>
                </div>
                
                <div class="bank">
                    <div class="radio-item">
                        <input type="radio" id="ritemb" name="ritem" value="ropt2">
                        <label for="ritemb"></label>
                    </div>  
                    <div class="back_image">
                        <img src="https://upload.wikimedia.org/wikipedia/en/3/35/Central_Bank_of_Sri_Lanka_logo.png" alt="">
                    </div>
                    <div class="bank_title">
                        Prasak bank 
                    </div>
                </div>
                
                
            </div>
        </div>

    </div>
    @include('layouts.app_footer')
@endsection

@section('script')
@endsection
