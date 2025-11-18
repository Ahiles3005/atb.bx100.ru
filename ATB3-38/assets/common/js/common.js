
"use strict";



window.addEventListener ("load", function () {

    
    /* ---------- ********** ОБЩИЕ ДЛЯ ВСЕХ СТРАНИЦ ********** ---------- */


    const body = document.querySelector (".body");




    // 1. ОПРЕДЕЛЕНИЕ ВЕЛИЧИНЫ CSS-ПЕРЕМЕННОЙ --VH ДЛЯ ЕЕ ПРИМЕНЕНИЯ ВМЕСТО
    // ЕДИНИЦЫ ИЗМЕРЕНИЯ VH

    function cCommonUserVh () {
        let userVh = window.innerHeight / 100;
        document.documentElement.style.setProperty ("--uservh", `${userVh}px`);
    }

    cCommonUserVh ();
    
    function cCommonUserVhDebounce0 (cB, time) {
        let idTimer;
        return function () {
            clearTimeout (idTimer);
            idTimer = setTimeout (() => {
                cB();
            }, time);
        }
    }

    const cCommonUserVhDebounce1 = cCommonUserVhDebounce0 (cCommonUserVh, 1000);

    window.addEventListener ("resize", cCommonUserVhDebounce1);




    // 2. КНОПКА UP

    const cCommonButtonUp = document.querySelector (".c-common--button__UP");

    if (window.scrollY > 100) {
        cCommonButtonUp.classList.add ("__c-common--button__UP");
    } else {
        cCommonButtonUp.classList.remove ("__c-common--button__UP");
    }

    window.addEventListener ("scroll", () => {
        if (window.scrollY > 100) {
            cCommonButtonUp.classList.add ("__c-common--button__UP");
        } else {
            cCommonButtonUp.classList.remove ("__c-common--button__UP");
        }
    });

    cCommonButtonUp.addEventListener ("click", () => {
        window.scrollTo (0, 0);
    });




    // 3. ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

    const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
    const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
    const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
    const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
    const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
    const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

});