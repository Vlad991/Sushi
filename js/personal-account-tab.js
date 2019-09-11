$(document).ready(function () {

    $('#personalAccountTab').on('click', '#personalAccountTabNav li a', function () {
        $('#personalAccountTabNav li').removeClass('acc-menu__item_active');
        $(this).parent("li").addClass('acc-menu__item_active');
        var href = $(this).attr('href');
        console.log(href);
        $('#personalAccountTab .personal-account__info-data').removeClass('active-tab').removeClass("in");
        $(href).parent("li").addClass('active-tab');
        setTimeout(function () {
            $(href).addClass('in');
        }, 200);
        return false;
    });

});