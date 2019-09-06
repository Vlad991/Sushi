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
            .fadeOut(2000);
        currentSlide.removeClass("current");

        // currentControl.fadeOut(1000);
        currentControl.removeClass("circle_active");

        if (nextSlideIndex == ($("#mainSlider > div:last").index() - 2)) {
            $("#mainSlider > div").eq(0)
                .css("display", "flex")
                .hide()
                .fadeIn(2000);
            $("#mainSlider > div").eq(0).addClass("current");

            $("#controls li").eq(0).children(0).fadeIn(1000);
            $("#controls li").eq(0).children(0).addClass("circle_active");
        } else {
            nextSlide
                .css("display", "flex")
                .hide()
                .fadeIn(2000);
            nextSlide.addClass("current");

            nextControl.fadeIn(1000);
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
            .fadeOut(2000);
        currentSlide.removeClass("current");

        // currentControl.fadeOut(1000);
        currentControl.removeClass("circle_active");

        if (prevSlideIndex == -1) {
            $("#mainSlider > div").eq($("#mainSlider > div:last").index() - 3)
                .css("display", "flex")
                .hide()
                .fadeIn(2000);
            $("#mainSlider > div").eq($("#mainSlider > div:last").index() - 3).addClass("current");

            $("#controls li").eq($("#mainSlider > div:last").index()).children(0).fadeIn(1000);
            $("#controls li").eq($("#mainSlider > div:last").index()).children(0).addClass("circle_active");
        } else {
            prevSlide
                .css("display", "flex")
                .hide()
                .fadeIn(2000);
            prevSlide.addClass("current");

            prevControl.fadeIn(1000);
            prevControl.addClass("circle_active");
        }
    });

});