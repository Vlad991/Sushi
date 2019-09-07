$(document).ready(function () {

    $("#nextReview").click(function () {
        var currentSlide = $("#reviewSlider > .active-slide");
        var currentSlideIndex = currentSlide.index();
        var nextSlideIndex = currentSlideIndex + 1;
        var nextSlide = $("#reviewSlider > div").eq(nextSlideIndex);
        var currentControl = $("#reviewControls li").eq(currentSlideIndex);
        var nextControl = $("#reviewControls li").eq(nextSlideIndex);

        currentSlide
            .css("display", "flex")
            .hide()
            .fadeOut(1000);
        currentSlide.removeClass("active-slide");

        // currentControl.fadeOut(1000);
        currentControl.removeClass("review-controls__circle_active");

        if (nextSlideIndex == $("#reviewSlider > div:last").index() + 1) {
            $("#reviewSlider > div").eq(0)
                .css("display", "flex")
                .hide()
                .fadeIn(1000);
            $("#reviewSlider > div").eq(0).addClass("active-slide");

            $("#reviewControls li").eq(0).fadeIn(1000);
            $("#reviewControls li").eq(0).addClass("review-controls__circle_active");
        } else {
            nextSlide
                .css("display", "flex")
                .hide()
                .fadeIn(1000);
            nextSlide.addClass("active-slide");

            nextControl.fadeIn(1000);
            nextControl.addClass("review-controls__circle_active");
        }
    });

    $("#prevReview").click(function () {
        var currentSlide = $("#reviewSlider > .active-slide");
        var currentSlideIndex = currentSlide.index();
        var prevSlideIndex = currentSlideIndex - 1;
        var prevSlide = $("#reviewSlider > div").eq(prevSlideIndex);
        var currentControl = $("#reviewControls li").eq(currentSlideIndex);
        var prevControl = $("#reviewControls li").eq(prevSlideIndex);

        currentSlide
            .css("display", "flex")
            .hide()
            .fadeOut(1000);
        currentSlide.removeClass("active-slide");

        // currentControl.fadeOut(1000);
        currentControl.removeClass("review-controls__circle_active");

        if (prevSlideIndex == -1) {
            $("#reviewSlider > div").eq($("#reviewSlider > div:last").index())
                .css("display", "flex")
                .hide()
                .fadeIn(1000);
            $("#reviewSlider > div").eq($("#reviewSlider > div:last").index()).addClass("active-slide");

            $("#reviewControls li").eq($("#reviewSlider > div:last").index()).fadeIn(1000);
            $("#reviewControls li").eq($("#reviewSlider > div:last").index()).addClass("review-controls__circle_active");
        } else {
            prevSlide
                .css("display", "flex")
                .hide()
                .fadeIn(1000);
            prevSlide.addClass("active-slide");

            prevControl.fadeIn(1000);
            prevControl.addClass("review-controls__circle_active");
        }
    });

});