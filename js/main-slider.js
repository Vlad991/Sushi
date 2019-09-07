$(document).ready(function () {

    $("#next").click(function () {
        var currentSlide = $("#mainSlider > .current");
        var currentSlideIndex = currentSlide.index();
        var nextSlideIndex = currentSlideIndex + 1;
        var nextSlide = $("#mainSlider > div").eq(nextSlideIndex);
        var currentControl = $("#controls li").eq(currentSlideIndex).children(0);
        var nextControl = $("#controls li").eq(nextSlideIndex).children(0);

        currentSlide
            .css("display", "flex")
            .hide()
            .fadeOut(500);
        currentSlide.removeClass("current");

        // currentControl.fadeOut(500);
        currentControl.removeClass("circle_active");

        if (nextSlideIndex == ($("#mainSlider > div:last").index() - 2)) {
            $("#mainSlider > div").eq(0)
                .css("display", "flex")
                .hide()
                .fadeIn(500);
            $("#mainSlider > div").eq(0).addClass("current");

            $("#controls li").eq(0).children(0).fadeIn(500);
            $("#controls li").eq(0).children(0).addClass("circle_active");
        } else {
            nextSlide
                .css("display", "flex")
                .hide()
                .fadeIn(500);
            nextSlide.addClass("current");

            nextControl.fadeIn(500);
            nextControl.addClass("circle_active");
        }
    });

    $("#prev").click(function () {
        var currentSlide = $("#mainSlider > .current");
        var currentSlideIndex = currentSlide.index();
        var prevSlideIndex = currentSlideIndex - 1;
        var prevSlide = $("#mainSlider > div").eq(prevSlideIndex);
        var currentControl = $("#controls li").eq(currentSlideIndex).children(0);
        var prevControl = $("#controls li").eq(prevSlideIndex).children(0);

        currentSlide
            .css("display", "flex")
            .hide()
            .fadeOut(500);
        currentSlide.removeClass("current");

        // currentControl.fadeOut(500);
        currentControl.removeClass("circle_active");

        if (prevSlideIndex == -1) {
            $("#mainSlider > div").eq($("#mainSlider > div:last").index() - 3)
                .css("display", "flex")
                .hide()
                .fadeIn(500);
            $("#mainSlider > div").eq($("#mainSlider > div:last").index() - 3).addClass("current");

            $("#controls li").eq($("#mainSlider > div:last").index() - 3).children(0).fadeIn(500);
            $("#controls li").eq($("#mainSlider > div:last").index() - 3).children(0).addClass("circle_active");
        } else {
            prevSlide
                .css("display", "flex")
                .hide()
                .fadeIn(500);
            prevSlide.addClass("current");

            prevControl.fadeIn(500);
            prevControl.addClass("circle_active");
        }
    });

});