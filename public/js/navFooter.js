(function ($) {
    "use strict";
    // niceSelect js code
    $(document).ready(function () {
        $("select").niceSelect();
    });

    $(".banner_text").slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
        pauseOnHover: true,
        touchMove: true,
        verticalSwiping: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
    });

    // Search Toggle
    $("#search_input_box").hide();
    $("#search_1").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
    $("#close_search").on("click", function () {
        $("#search_input_box").slideUp(500);
    });

    //memnu js
    jQuery(document).ready(function ($) {
        $(".menu-trigger").on("click", function () {
            $(".off-canven-menu").addClass("active");
            $(".offcanvas-overlay").addClass("active");
        });
        $(".close-icon i, .offcanvas-overlay").on("click", function () {
            $(".off-canven-menu").removeClass("active");
            $(".offcanvas-overlay").removeClass("active");
        });
    });
})(jQuery);
