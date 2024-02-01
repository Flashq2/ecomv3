

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