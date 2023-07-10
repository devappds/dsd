$(function () {

    "use strict";

    //===== Swiper
    var menu = ['2018', '2019', '2020'];
    var mySwiper = new Swiper('.roadmap-main', {
        // Optional parameters
        loop: true,
        pagination: {
            el: '.swiper-custom-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (menu[index]) + '</span>';
            },
        },
        navigation: {
            nextEl: '.roadmap-main-next',
            prevEl: '.roadmap-main-prev',
        }
    });
    var mySwiper = new Swiper('.roadmap-sec', {
        // Optional parameters
        slidesPerView: 4,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            992: {
                slidesPerView: 2
            },
			320: {
                slidesPerView: 1,
            }
        }
    });

        // Single Features Active
        $('.future-roadmap').on('mouseover', '.roadmap-sec-slide', function() {
            $('.roadmap-sec-slide.active').removeClass('active');
            $(this).addClass('active');
        });

  


});