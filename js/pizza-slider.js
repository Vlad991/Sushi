$(document).ready(function () {
    $(".pizza-slide,.pizza-card").on('click', '.sizes__size-list li', function () {
            $('.sizes__size-list li').removeClass('size-list__item_active');
            $(this).addClass('size-list__item_active');
            return false;
        }
    );

    $(".pizza-slide__footer .button_to-cage").click(function () {
        console.log("lol");
        window.location.href = "./pizza_assorti.php";
    });
});