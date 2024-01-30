

$(document).on('click','.footer_item',function(){
    let url = $(this).attr('data-url');
    window.location = url;
})
