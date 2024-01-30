<?php
$active = '';
if(isset($_GET['page'])) $active = $_GET['page'];
?>
<div class="row">
    <div class="nav_footer">
        <div class="footer_item  {{$active == 'home' ? 'active' : ''}}" data-url = '{{url('/home?page=home')}}'>
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </div>
        <div class="footer_item {{$active == 'product' ? 'active' : ''}}" data-url = '{{url('/product?page=product')}}'>
            <i class="fa-solid fa-envelopes-bulk"></i>
            <span>Product</span>
        </div>
        <div class="footer_item {{$active == 'payment' ? 'active' : ''}}" data-url = '{{url('/home?page=home')}}'>
            <i class="fa-solid fa-credit-card"></i>
            <span>Payment</span>
        </div>
       
        <div class="footer_item {{$active == 'order' ? 'active' : ''}}" data-url = '{{url('/home?page=home')}}'>
            <i class="fa-solid fa-layer-group"></i>
            <span>Order</span>
        </div>
        <div class="footer_item {{$active == 'profile' ? 'active' : ''}}"data-url = '{{url('/home?page=home')}}'>
            <i class="fa-solid fa-id-badge"></i>
            <span>Profile</span>
        </div>
    </div>
</div>
 