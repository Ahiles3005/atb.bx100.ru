
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА P404 |||||||||| ********** ---------- */


    if (document.querySelector ("#p404")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. АНИМАЦИЯ

        //1.2 Для мобилок

        const p404HeroSvgPathM = Array.from (document.querySelectorAll(".p404-hero--svg__IMAGE_MOB path:not(.p404-hero--path__4)"));

        p404HeroSvgPathM.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    strokeWidth: "0.5"
                },
                {
                    offset: (i) * 0.003773,
                    strokeWidth: "0.5"
                },
                {
                    offset: (i + 1) * 0.003773,
                    strokeWidth: "1.5"
                },
            ],
            {
                duration: 30000,
                easing: "linear",
                delay: `${((i + 1) * 37.73) + 800}`,
                iterations: Infinity,
            });
        });



        //1.2 Для десктопа

        const p404HeroSvgPathD = Array.from (document.querySelectorAll(".p404-hero--svg__IMAGE_DESK path:not(.p404-hero--path__4)"));

        p404HeroSvgPathD.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    strokeWidth: "0.5"
                },
                {
                    offset: (i) * 0.003367,
                    strokeWidth: "0.5"
                },
                {
                    offset: (i + 1) * 0.003367,
                    strokeWidth: "1.5"
                },
            ],
            {
                duration: 30000,
                easing: "linear",
                delay: `${((i + 1) * 33.67) + 800}`,
                iterations: Infinity,
            });
        });
    }
});