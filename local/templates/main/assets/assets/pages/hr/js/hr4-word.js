
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HR |||||||||| ********** ---------- */


    if (document.querySelector ("#hr")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ WORD ********** ---------- */


        // 1. SWIPER

        const hrWordDivSwiper = new Swiper (".hr-word--div__SWIPER", {
            spaceBetween: 20,
            autoHeight: true,
            grabCursor: true,
            navigation: {
                nextEl: '.hr-word--button__SWIPER_NEXT',
                prevEl: '.hr-word--button__SWIPER_PREV',
            },
        });
    }
});