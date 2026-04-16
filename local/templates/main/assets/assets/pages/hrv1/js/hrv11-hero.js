
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА HRV1 |||||||||| ********** ---------- */


    if (document.querySelector ("#hrv1")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ HERO ********** ---------- */


        // 1. РАЗБИВКА УРОВНЕЙ ЗАРПЛАТЫ ПО ТЫСЯЧАМ

        function hrv1HeroPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hrv1HeroPrices = Array.from (document.querySelectorAll (".hrv1-hero--span__WAGE._START, .hrv1-hero--span__WAGE._END"));
            hrv1HeroPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hrv1HeroPriceSplit ();

        

    }
});