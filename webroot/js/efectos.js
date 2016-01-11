$(function(){
    $('#contactoMenu').click(function(){
         $('html, body').animate({
        scrollTop: $("#infoContacto").offset().top
    }, 1000);
        $('[data-contacto]').delay(2210).css({'border': '2px solid #f1c832', 'border-radius' : '10px'});
    })
})