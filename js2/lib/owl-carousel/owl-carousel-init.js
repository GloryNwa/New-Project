jQuery(document).ready(function () {
    // use sctict mode js
    "use strict";
    $('.new-arrival-product-slide').owlCarousel({
        loop: true,
        margin: 30,
        pagination: false,
        dots: false,
        nav: true,
        responsiveClass: true,
        singleItem: false,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
                loop: false
            }
        }
    });
    $('.home-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        pagination: false,
        dots: false,
        nav: true,
        navText: [
            "<i class='fa fa-angle-right'></i>",
            "<i class='fa fa-angle-left'></i>"
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    });
    $('.latest-news-slide').owlCarousel({
        loop: true,
        margin: 10,
        pagination: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });
    $('.new-arrival-product-slide').owlCarousel({
        loop: true,
        margin: 30,
        pagination: false,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
    $('.brand-logo').owlCarousel({
        loop: true,
        margin: 30,
        pagination: false,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 5,
                nav: false
            },
            1000: {
                items: 6,
                nav: true,
                loop: false
            }
        }
    });
    $('.best-seller-product-carousel').owlCarousel({
        loop: true,
        margin: 30,
        pagination: false,
        dots: false,
        nav: false,
        responsiveClass: true,
        singleItem: true,
        //items: 1,
        navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ],
        responsive:{
             0:{
                 items:1,
                 nav:true
             },
             992:{
                items:1,
                 nav:true
             },
             600:{
                 items:2,
                 nav:true
             },
             768:{
                 items:2,
                 nav:true
             },
             1000:{
                 items:1,
                 nav:true,
                 loop:false
             }
         }
        
    });
    $('.top-product-seller').owlCarousel({
        loop: true,
        margin: 30,
        pagination: false,
        dots: false,
        nav: false,
        responsiveClass: true,
        singleItem: true,
        navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });
    $('#team-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    $('#review-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        pagination: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
});
