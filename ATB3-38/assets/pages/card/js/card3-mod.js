
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦА КАРТОЧКА СЕРИИ |||||||||| ********** ---------- */


    if (document.querySelector ("#card")) {


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




        
        // 4. РАСКРЫТИЕ КАРТОЧЕК

        const cdModArticles = Array.from (document.querySelectorAll (".cd-mod--div__CARDS .hm-cat--article__CARD"));
        const cdModSpanInd1 = document.querySelector (".cd-mod--span__IND1");
        const cdModSpanInd2 = document.querySelector (".cd-mod--span__IND2");
        const cdModDivLine1 = document.querySelector (".cd-mod--div__LINE1");
        const cdModButtonElse = document.querySelector (".cd-mod--button__ELSE");
        const cdModDivCards = document.querySelector (".cd-mod--div__CARDS");



        // 4.1 Счетчик показанных порций карточек

        let cdModCounter = 1;



        // 4.2 Счетчик показанных карточек

        function cdModVisCounter () {
            // 4.2.1 Числа

            const cdModArticlesVis = cdModArticles.filter (x => {
                return getComputedStyle (x).display == "grid";
            });
            cdModSpanInd1.textContent = cdModArticlesVis.length;
            cdModSpanInd2.textContent = cdModArticles.length;

            // 4.2.2 Линия

            cdModDivLine1.style.width = `${(parseFloat (cdModSpanInd1.textContent) / parseFloat (cdModSpanInd2.textContent)) * 100}%`;

            // 4.2.3 Уборка кнопки "Показать еще", если все карточки показаны

            if (cdModArticlesVis.length === cdModArticles.length) {
                cdModButtonElse.classList.add ("__cd-mod--button__ELSE");
            } else {
                cdModButtonElse.classList.remove ("__cd-mod--button__ELSE");
            }
        }



        // 4.3 Начальное / текущее количество видимых карточек (для начальной загрузки и изменения количества при ресайзе)

        function cdModCardsCur () {
            if (window.innerWidth < 768 || (window.innerWidth > 1199 && window.innerWidth < 1440) || window.innerWidth > 1919) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 3) {
                        a[i]?.classList.add ("__cd-mod--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__cd-mod--article__CARD");
                    }
                });
            } else if ((window.innerWidth > 767 && window.innerWidth < 1200) || window.innerWidth > 1439 && window.innerWidth < 1920) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 2) {
                        a[i]?.classList.add ("__cd-mod--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__cd-mod--article__CARD");
                    }
                });
            }
            
            cdModVisCounter ();
        }

        cdModCardsCur ();



        // 4.4 Добавление карточек по клику по кнопке

        function cdModCardsAdd () {

            cdModCounter++;

            if (window.innerWidth < 768 || (window.innerWidth > 1199 && window.innerWidth < 1440) || window.innerWidth > 1919) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 3) {
                        a[i]?.classList.add ("__cd-mod--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__cd-mod--article__CARD");
                    }
                });
            } else if ((window.innerWidth > 767 && window.innerWidth < 1200) || window.innerWidth > 1439 && window.innerWidth < 1920) {
                cdModArticles.forEach ((v, i, a) => {
                    if (i < cdModCounter * 2) {
                        a[i]?.classList.add ("__cd-mod--article__CARD");
                    } else {
                        a[i]?.classList.remove ("__cd-mod--article__CARD");
                    }
                });
            }

            cdModVisCounter ();
        }

        cdModButtonElse.addEventListener ("click", cdModCardsAdd);



        // 4.5 Пересчет при резайзе

        cdCommonMedia768.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1200.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1440.addEventListener ("change", cdModCardsCur);
        cdCommonMedia1920.addEventListener ("change", cdModCardsCur);
    }
});