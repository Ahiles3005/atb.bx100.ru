
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА ОТРАСЛИ |||||||||| ********** ---------- */


    if (document.querySelector ("#ind")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");


        



        
        /* ---------- ********** СЕКЦИЯ TSK (ЗАДАЧИ) ********** ---------- */


        // 1. ШИРИНА БЛОКОВ НА МОБИЛЬНЫХ (ДО 1440) С ИЗОБРАЖЕНИЯМИ 

        const inTskDivItem = Array.from (document.querySelectorAll (".in-tsk--div__ITEM"));

        function inTskDivItemWidthDesc () {
            if (!cdCommonMedia1440.matches) {
                inTskDivItem.forEach ((v, i, a) => {
                    a[i].style.width = `${document.documentElement.clientWidth}px`;
                });
            } else {
                inTskDivItem.forEach ((v, i, a) => {
                    a[i].style.width = null;
                });
            }
        }

        inTskDivItemWidthDesc ();

        function inTskDivItemWidthDescDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const inTskDivItemWidthDescDebounce1 = inTskDivItemWidthDescDebounce0 (inTskDivItemWidthDesc, 150);

        window.addEventListener ("resize", inTskDivItemWidthDescDebounce1);
    }
});