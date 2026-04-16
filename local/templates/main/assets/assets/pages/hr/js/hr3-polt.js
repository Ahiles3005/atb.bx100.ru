
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

        
        /* ---------- ********** СЕКЦИЯ POLT ********** ---------- */


        // 1. РАСКРЫТИЕ / СКРЫТИЕ ДОП. КОНТЕНТА НА < 1440

        const hrPoltDivElse = document.querySelector (".hr-polt--div__ELSE");
        const hrPoltButtonElse = document.querySelector (".hr-polt--button__ELSE:not(._HIDE)");
        const hrPoltButtonHide = document.querySelector (".hr-polt--button__ELSE._HIDE");

        hrPoltButtonElse.addEventListener ("click", () => {
            hrPoltButtonElse.classList.add ("__hr-polt--button__ELSE");
            setTimeout (() => {
                hrPoltButtonElse.classList.add ("__hr-polt--button__ELSE2");
            }, 250);
            hrPoltDivElse.classList.add ("__hr-polt--div__ELSE");
        });

        hrPoltButtonHide.addEventListener ("click", () => {
            hrPoltButtonElse.classList.remove ("__hr-polt--button__ELSE2");
            setTimeout (() => {
                hrPoltButtonElse.classList.remove ("__hr-polt--button__ELSE");
            }, 50);
            hrPoltDivElse.classList.remove ("__hr-polt--div__ELSE");
        });

    }
});