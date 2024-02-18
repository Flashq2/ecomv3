

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

 
$('.add_button_of_list').on('click', function () {
    var cart = $('#add_and_link');
    var imgtodrag = $(this).eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
            .offset({
            top: imgtodrag.offset().top,
            left: imgtodrag.offset().left
        })
            .css({
            'opacity': '0.5',
                'position': 'absolute',
                'height': '150px',
                'width': '150px',
                'z-index': '100'
        })
            .appendTo($('body'))
            .animate({
            'top': cart.offset().top + 10,
                'left': cart.offset().left + 10,
                'width': 75,
                'height': 75
        }, 1000, 'easeInOutExpo');
        
        setTimeout(function () {
            cart.effect("shake", {
                times: 2
            }, 200);
        }, 1500);

        imgclone.animate({
            'width': 0,
                'height': 0
        }, function () {
            $(this).detach()
        });
    }
});


$(document).on('click','#drawer',function(e){
    $('.drawer').css({'left':'0'});
})
// $(document).on('click','body:not(#drawer)',function(e){
//     $('.drawer').css({'left':'-10000'});
// })
 