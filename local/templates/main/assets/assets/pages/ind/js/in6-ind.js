
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ОТРАСЛИ |||||||||| ********** ---------- */


    if (document.querySelector ("#ind")) {

        
        /* ---------- ********** СЕКЦИЯ PROD ********** ---------- */


        // 4. СЛАЙДЕР ОТРАСЛИ
        
        const cdUseDivSwiper21 = new Swiper (".cd-use--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER21_NEXT',
                prevEl: '.cd-use--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 4,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });


    }
});