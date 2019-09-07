$(document).ready(function () {

    $('#pizzaTab').on('click','#pizzaTabNav li a',function(){
        $('#pizzaTabNav li').removeClass('branches__item_active');
        $(this).parent("li").addClass('branches__item_active');
        var href = $(this).attr('href');
        console.log(href)
        $('#pizzaTab .pizza-slides').removeClass('active-tab').removeClass("in");
        $(href).addClass('active-tab');
        setTimeout(function(){
            $(href).addClass('in');
        }, 200);
        return false;
    });

});