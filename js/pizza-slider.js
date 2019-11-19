$(document).ready(function () {
    $(".pizza-slide,.pizza-card").on('click', '.sizes__size-list li', function () {
        $(this).parent(".sizes__size-list").children().removeClass('size-list__item_active');
        $(this).addClass('size-list__item_active');
        return false;
    });

    $(".pizza-slide,.pizza-card").on("click", ".pizza-info__ingredients, .pizza-slide__ingredients", function () {
        if ($(this).next().hasClass("hide")) {
            $(this).next().removeClass("hide");
            $(this).parent(".pizza-slide").css("z-index", 45);
        } else {
            $(this).parent(".pizza-slide").css("z-index", 1);
            $(this).next().addClass("hide");
        }
    });

    $(".pizza-slide,.pizza-card").on('click', '.quantity-list li', function () {
        $(this).parent(".quantity-list").children().removeClass('quantity-list__item_active');
        $(this).addClass('quantity-list__item_active');
        return false;
    });

    $(".pizza-slide__footer .button_to-cage").click(function () {
        console.log("lol");
        window.location.href = "./pizza_assorti.php";
    });
});