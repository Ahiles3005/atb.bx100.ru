
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

        // 1.1 Для мобилок

        // 1.1.1 Линии
        // 0.003754 - коэффициент: 98% времени итерации / количество элементов (261) / 100
        // оставшиеся 2% времени итерации - для плавного перехода

        const p404HeroSvgPathM = Array.from (document.querySelectorAll(".p404-hero--svg__IMAGE_MOB path:not(.p404-hero--path__4)"));

        p404HeroSvgPathM.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    offset: 0,
                    strokeWidth: "0.5"
                },
                {
                    offset: i * 0.003754,
                    strokeWidth: "0.5"
                },
                {
                    offset: (i + 1) * 0.003754,
                    strokeWidth: "1",
                },
                {
                    offset: 0.98,
                    strokeWidth: "1",
                },
                {
                    offset: 1,
                    strokeWidth: "0.5"
                },
            ],
            {
                duration: 20000,
                easing: "linear",
                delay: 800,
                iterations: Infinity,
            });
        });



        // 1.1.2 Круги
        // 0.02390 - коэффициент: 98% времени итерации / количество элементов (41) / 100
        // оставшиеся 2% времени итерации - для плавного перехода 

        const p404HeroSvgPathMCirc = Array.from (document.querySelectorAll('.p404-hero--svg__IMAGE_MOB path[fill="#005792"]'));

        p404HeroSvgPathMCirc.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    offset: 0,
                    fill: "transparent"
                },
                {
                    offset: i * 0.02390,
                    fill: "transparent",
                },
                {
                    offset: (i + 1) * 0.02390,
                    fill: "#005792",
                },
                {
                    offset: 0.98,
                    fill: "#005792",
                },
                {
                    offset: 1,
                    fill: "transparent"
                },
            ],
            {
                duration: 20000,
                easing: "linear",
                delay: 800,
                iterations: Infinity,
            });
        });



        // 1.2 Для десктопа

        // 1.2.1 Линии
        // 0.003299 - коэффициент: 98% времени итерации / количество элементов (297) / 100
        // оставшиеся 2% времени итерации - для плавного перехода

        const p404HeroSvgPathD = Array.from (document.querySelectorAll(".p404-hero--svg__IMAGE_DESK path:not(.p404-hero--path__4)"));

        p404HeroSvgPathD.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    offset: 0,
                    strokeWidth: "0.5"
                },
                {
                    offset: i * 0.003299,
                    strokeWidth: "0.5"
                },
                {
                    offset: (i + 1) * 0.003299,
                    strokeWidth: "1.5",
                },
                {
                    offset: 0.98,
                    strokeWidth: "1.5",
                },
                {
                    offset: 1,
                    strokeWidth: "0.5"
                },
            ],
            {
                duration: 20000,
                easing: "linear",
                delay: 800,
                iterations: Infinity,
            });
        });



        // 1.2.1 Круги
        // 0.020851 - коэффициент: 98% времени итерации / количество элементов (47) / 100
        // оставшиеся 2% времени итерации - для плавного перехода

        const p404HeroSvgPathDCirc = Array.from (document.querySelectorAll('.p404-hero--svg__IMAGE_DESK path[fill="#005792"]'));

        p404HeroSvgPathDCirc.forEach ((v, i, a) => {
            a[i].animate ([
                {
                    offset: 0,
                    fill: "transparent"
                },
                {
                    offset: i * 0.020851,
                    fill: "transparent",
                },
                {
                    offset: (i + 1) * 0.020851,
                    fill: "#005792",
                },
                {
                    offset: 0.98,
                    fill: "#005792",
                },
                {
                    offset: 1,
                    fill: "transparent"
                },
            ],
            {
                duration: 20000,
                easing: "linear",
                delay: 800,
                iterations: Infinity,
            });
        });
    }
});