
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ABOUT |||||||||| ********** ---------- */


    if (document.querySelector ("#ab")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ PAR ********** ---------- */


        // 1. ШИРИНА СЕТКИ БЛОКА MAIN

        const abParDivMain = document.querySelector (".ab-par--div__MAIN");

        function abParDivMainWidth () {
            abParDivMain.style.width = `${document.documentElement.clientWidth}px`;
        }

        abParDivMainWidth ();

        function abParDivMainWidthDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const abParDivMainWidthDebounce1 = abParDivMainWidthDebounce0 (abParDivMainWidth, 150);

        window.addEventListener ("resize", abParDivMainWidthDebounce1);







        // 2. СЛАЙДЕРЫ

        const abParDivSwiper = Array.from (document.querySelectorAll (".ab-par--div__MAIN_ITEM"), x => {
            return new Swiper (x.querySelector (".ab-par--div__SWIPER"), {
                grabCursor: true,
                breakpoints: {
                    200: {
                        spaceBetween: 20,
                        slidesPerView: 1,
                    },
                
                    500: {
                        spaceBetween: 20,
                        slidesPerView: 2,
                    },

                    768: {
                        spaceBetween: 20,
                        slidesPerView: 3,
                    },
    
                    1200: {
                        spaceBetween: 20,
                        slidesPerView: 4,
                    },
    
                    1440: {
                        spaceBetween: 44,
                        slidesPerView: 4,
                    },
                },
                navigation: {
                    nextEl: x.querySelector (".ab-par--button__SWIPER_NEXT"),
                    prevEl: x.querySelector (".ab-par--button__SWIPER_PREV"),
                },
            });
        });
    }
});