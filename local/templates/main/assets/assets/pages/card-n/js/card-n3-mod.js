
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card-n")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MOD ********** ---------- */


        // 1. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatImageSwiper () {

            // Слайдер для изображений товара (один скрипт для всего перечня товаров)

            const hmCatDivCardImage = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"), x => {
                return new Swiper (x.querySelector (".hm-cat--div__SWIPER"), {
                    loop: true,
                    speed: 700,
                    grabCursor: true,
                    pagination: {
                        el: x.querySelector (".hm-cat--div__SWIPER_PAGINATION"),
                        type: 'bullets',
                        clickable: true,
                    },
                });
            });


            const hmCatDivCardImage0 = Array.from (document.querySelectorAll (".hm-cat--div__CARD_IMAGE"));

            hmCatDivCardImage0.forEach ((v, i, a) => {
                const num = Array.from (a[i].querySelectorAll (".hm-cat--div__SWIPER_SLIDE"));

                num.forEach ((v1, i1, a1) => {
                    let div = document.createElement ("div");
                    div.className = "hm-cat--div__CARD_SENSOR_ITEM";
                    a[i].querySelector (".hm-cat--div__CARD_SENSOR").append (div);
                    
                    div.addEventListener ("mouseover", () => {
                        hmCatDivCardImage[i].slideTo (i1);
                    });
                });
            });
        
        }

        hmCatImageSwiper ();




        // 2. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatCardButtons () {
            const hmCatButtonCardCom = Array.from (document.querySelectorAll (".hm-cat--button__CARD_COMPARISON"));
            const hmCatButtonCardFav = Array.from (document.querySelectorAll (".hm-cat--button__CARD_FAVOURITES"));

            hmCatButtonCardCom.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_COMPARISON");
                });
            });
            hmCatButtonCardFav.forEach ((v, i, a) => {
                a[i].addEventListener ("click", () => {
                    a[i].classList.toggle ("__hm-cat--button__CARD_FAVOURITES");
                });
            });
        }

        hmCatCardButtons ();




        // 3. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();
    }
});