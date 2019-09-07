$(document).ready(function () {

    $('#pizzaTab').on('click','#pizzaTabNav li a',function(){
        $('#pizzaTabNav li').removeClass('sort-pizza__item_active');
        $(this).parent("li").addClass('sort-pizza__item_active');
        var href = $(this).attr('href');
        console.log(href)
        $('#pizzaTab div').removeClass('active-tab').removeClass("in");
        $(href).addClass('active-tab');
        setTimeout(function(){
            $(href).addClass('in');
        }, 200);
        return false;
    });

});