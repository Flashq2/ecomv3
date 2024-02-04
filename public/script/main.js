

$(document).on('click','.footer_item',function(){
    let url = $(this).attr('data-url');
    window.location = url;
})

var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
var swiper = new Swiper(".mySwiper2", {
    slidesPerView: "auto",
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});



$(document).on('click','.is_add_tocard',function(e){
    $('.parent_option').css({'height':'100%'});
    $('.parent_option').css({'width':'100%'});
    $('.parent_option .option').css({'height': '500px'});
})  

$(document).on('click','.parent_option ,.cancel',function(e){
    if (e.target !== this) return;
    $('.option').removeAttr('style'); 
    setTimeout(function() { 
        $('.parent_option').css({'height':'0%'});
        $('.parent_option').css({'width':'0%'});
    }, 220);
    
    

})