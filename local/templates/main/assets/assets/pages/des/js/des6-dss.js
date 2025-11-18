
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА РЕШЕНИЯ |||||||||| ********** ---------- */


    if (document.querySelector ("#des")) {

        
        /* ---------- ********** СЕКЦИЯ PROD ********** ---------- */


        // 4. СЛАЙДЕР ОТРАСЛИ
        
        const cdUseDivSwiper22 = new Swiper (".cd-use--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER22_NEXT',
                prevEl: '.cd-use--button__SWIPER22_PREV',
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
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });


    }
});