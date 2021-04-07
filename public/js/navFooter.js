(function ($) {
    "use strict";
    var map = $(".map");
    if (map.length) {
        $(".map").gmap3({
            center: [40.74, -74.18],
            zoom: 12,
        });
    }
    // menu fixed js code
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
            $(".main_menu").addClass("menu_fixed animated fadeInDown");
        } else {
            $(".main_menu").removeClass("menu_fixed animated fadeInDown");
        }
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
