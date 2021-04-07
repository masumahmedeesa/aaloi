// $('.active-brand-carusel').owlCarousel({
//     loop: true,
//     autoplayHoverPause: true,
//     smartSpeed:500,
//     autoplay: true,
//     margin: 50,
//     dots: true,
//     responsive: {
//         0: {
//             items: 2,
//         },
//         768: {
//             items: 3,
//         },
//         991: {
//             items: 4,
//         },
//         1024: {
//             items: 4,
//         }
//     }
// });

// $('.active-project-carusel').owlCarousel({
//     items:4,
//     loop:true,
//     smartSpeed:500,
//     margin: 50,
//     autoplay: true,
//     dots: true,
//     responsive: {
//         0: {
//             items: 2,
//         },
//         480: {
//             items: 2,
//         },
//         768: {
//             items: 3,
//         },
//         1281:{
//             items:4,
//         }
//     }
// });

(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {
        $(".testimonialCarousel").owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            nav: false,
            dots: true,
            smartSpeed: 500,
            responsive: {
                0: {
                    items: 1,
                },
                1000: {
                    items: 2,
                    loop: true,
                },
            },
        });
    });

    //memnu js
    // jQuery(document).ready(function ($) {
    //     $(".menu-trigger").on("click", function () {
    //         $(".off-canven-menu").addClass("active");
    //         $(".offcanvas-overlay").addClass("active");
    //     });
    //     $(".close-icon i, .offcanvas-overlay").on("click", function () {
    //         $(".off-canven-menu").removeClass("active");
    //         $(".offcanvas-overlay").removeClass("active");
    //     });
    // });
})(jQuery);
