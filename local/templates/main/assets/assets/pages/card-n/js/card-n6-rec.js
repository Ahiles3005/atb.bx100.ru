
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА ТОВАРА |||||||||| ********** ---------- */


    if (document.querySelector ("#card-n")) {

        
        /* ---------- ********** СЕКЦИЯ REC ********** ---------- */


        // 1. СЛАЙДЕР

        const cdRecDivSwiper = new Swiper (".cd-rec--div__SWIPER", {
            navigation: {
                nextEl: '.cd-rec--button__SWIPER_NEXT',
                prevEl: '.cd-rec--button__SWIPER_PREV',
            },
            breakpoints: {
                200: {
                    spaceBetween: 10,
                    slidesPerView: 1,
                },
            
                768: {
                    spaceBetween: 44,
                    slidesPerView: 2,
                },

                1200: {
                    spaceBetween: 44,
                    slidesPerView: 3,
                },

                1440: {
                    spaceBetween: 44,
                    slidesPerView: 4,
                },

                1920: {
                    spaceBetween: 44,
                    slidesPerView: 4,
                },
            },
        });




        // 2. НАСТРОЙКИ ДЛЯ ВНУТРЕННИХ СЛАЙДЕРОВ - В СЕКЦИИ MOD
    }
});