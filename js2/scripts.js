jQuery(document).ready(function () {
    // use sctict mode js
    "use strict";
    /* jQuery("#trmenu").trmenu({
         align: "right",
         indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
         indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
     }); */


    // Parallax
    var $parallax = $('.prallax-banner');
    if ($parallax.length > 0) {
        $parallax.parallaxie({
            speed: 0.5,
            offset: 0
        });
    }

    /*  - wow animation wow.js
     ---------------------------------------------------*/
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false // trigger animations on mobile devices (true is default)
    });
    wow.init();
    /*  - wow animation wow.js End
     ---------------------------------------------------*/
    // $(".cart-icon").on('click', function(){
    //     if($(".cart-item-added").hasClass("cart-absolute")){
    //         $(".cart-item-added").removeClass("cart-absolute");
    //     }else{
    //         $(".cart-item-added").addClass("cart-absolute");
    //     }
    //
    // });
    // $(".setting-icon").on('click', function(){
    //     if($(".account-inof").hasClass("currency")){
    //         $(".account-inof").removeClass("currency");
    //     }else{
    //         $(".account-inof").addClass("currency");
    //     }
    //
    // });
    $(".search-icon").on('click', function () {
        $(".search-slideup").slideDown("slow");
    });
    $(".search-close-icon").on('click', function () {
        $(".search-slideup").slideUp("slow");
    });
    $('.top-bar-icon-list').on('click', function (event) {
        event.stopPropagation();
        $(".top-bar-icon-list.active ").removeClass("active");
        $(this).addClass('active');
    });

    $(document).on("click", function () {
        $(".top-bar-icon-list").removeClass("active");
    });

    $('.counter-up-number').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            //easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});




//plugin bootstrap minus and plus
$('.btn-number').on('click', function (e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val(),10);
    if (!isNaN(currentVal)) {
        if (type == 'minus')
            input.val(currentVal - 1);
        else if (type == 'plus')
            input.val(currentVal + 1);
    } else {
        input.val(0);
    }
});
