
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА РЕШЕНИЯ |||||||||| ********** ---------- */


    if (document.querySelector ("#des")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");


        



        
        /* ---------- ********** СЕКЦИЯ ADV ********** ---------- */


        // 1. АККОРДЕОН ДЛЯ МОБИЛОК

        const inAdvDivItem = Array.from (document.querySelectorAll (".in-adv--div__ITEM"));
        const inAdvButtonItemTop = Array.from (document.querySelectorAll (".in-adv--button__ITEM_TOP"));


        inAdvButtonItemTop.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!cdCommonMedia1440.matches) {
                    inAdvDivItem[i].classList.toggle ("__in-adv--div__ITEM");
                }
            });
        });




        // 2. ШИРИНА СЕТКИ

        const inAdvDivTableCont = document.querySelector (".in-adv--div__TABLE_CONT");

        function inAdvDivTableContWidthDesc () {
            inAdvDivTableCont.style.width = `${document.documentElement.clientWidth}px`;
        }

        inAdvDivTableContWidthDesc ();

        function inAdvDivTableContWidthDescDebounce0 (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const inAdvDivTableContWidthDescDebounce1 = inAdvDivTableContWidthDescDebounce0 (inAdvDivTableContWidthDesc, 150);

        window.addEventListener ("resize", inAdvDivTableContWidthDescDebounce1);

        
    }
});