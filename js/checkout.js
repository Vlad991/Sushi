$(document).ready(function () {

    $('#checkoutAddressRadio').click(function () {
        if ($('#checkoutAddressRadio .radio__item:first-child .radio__input').is(':checked')) {
            $('#checkoutAddress').css("display", "flex");
            $('#checkoutFilials').css("display", "none");
        } else {
            $('#checkoutAddress').css("display", "none");
            $('#checkoutFilials').css("display", "flex");
        }
        return true;
    });

});