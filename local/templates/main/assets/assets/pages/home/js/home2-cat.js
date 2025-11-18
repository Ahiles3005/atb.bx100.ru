
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| ДОМАШНЯЯ СТРАНИЦА |||||||||| ********** ---------- */


    if (document.querySelector ("#home")) {

        
        /* ---------- ********** СЕКЦИЯ 2 - CAT ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ, 
        // ВЫБОР ПЕРВОЙ РАДИОКНОПКИ В ОТКРЫВШЕМСЯ СУБМЕНЮ,
        // СНЯТИЕ ВЫБОРА СО ВСЕХ РАДИОКНОПОК В ЗАКРЫВАЮЩИХСЯ СУБМЕНЮ

        const hmCatLiMenuItem = Array.from (document.querySelectorAll (".hm-cat--li__MENU_ITEM"));
        const hmCatButtonMenuItem = Array.from (document.querySelectorAll (".hm-cat--button__MENU_ITEM"));
        const hmCatFormSubmenu = Array.from (document.querySelectorAll (".hm-cat--form__SUBMENU"));
        const hmCatDivContent = document.querySelector (".hm-cat--div__CONTENT");
        
    

        hmCatButtonMenuItem.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                
                // 1.1 Открытие субменю

                if (!hmCatLiMenuItem[i].classList.contains ("__hm-cat--li__MENU_ITEM")) {
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    } else {
                        hmCatLiMenuItem[i].classList.add ("__hm-cat--li__MENU_ITEM");
                    }
                    
                    

                    // 1.2 Выбор первой радиокнопки в открывшемся субменю

                    if (hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type > .hm-cat--input__SUBMENU")) {
                        hmCatLiMenuItem[i].querySelector (".hm-cat--label__SUBMENU:first-of-type").click ();
                    }
                    
                    // 1.3 Закрытие остальных субменю

                    hmCatLiMenuItem.filter (x => x !== hmCatLiMenuItem[i]).forEach ((v1, i1, a1) => {
                        a1[i1].classList.remove ("__hm-cat--li__MENU_ITEM");

                        // 1.4 Снятие выбора с радиокнопки в закрывающемся меню

                        if (a1[i1].querySelector (".hm-cat--input__SUBMENU:checked")) {
                            const a = a1[i1].querySelector (".hm-cat--input__SUBMENU:checked");
                            a.checked = false;
                        } 
                    });
                } else {
                    // 1.5 Закрытие субменю
                    if (window.innerWidth < 1440) {
                        hmCatLiMenuItem[i].classList.remove ("__hm-cat--li__MENU_ITEM");
                    }
                }
            });
        });


        // 1.6 Открытие первого субменю при загрузке страницы

        hmCatButtonMenuItem[0].click ();


        // 1.7 Выравнивание высоты form для десктопов по блоку с контентом

        function hmCatFormHeight () {
            if (window.innerWidth > 1439) {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = getComputedStyle (hmCatDivContent).height;
                    }, 800);
                    
                });
            } else {
                hmCatFormSubmenu.forEach ((v, i, a) => {
                    setTimeout (() => {
                        a[i].style.maxHeight = null;
                    }, 50);
                });
            }
        }

        // !!! 

        // Если возникнет вероятность того, что боковое меню в десктопе в Каталоге может превысить
        // по высоте основной блок - раскомментировать далее до 1.8 
        // и содержимое пункта 1.8:

        // hmCatFormHeight ();

        // function hmCatDebounce (cB, time) {
        //     let idTimer;
        //     return function () {
        //         clearTimeout (idTimer);
        //         idTimer = setTimeout (() => {
        //             cB();
        //         }, time);
        //     }
        // }

        // const hmCatFormDebounce = hmCatDebounce (hmCatFormHeight, 100);

        // window.addEventListener ("resize", hmCatFormDebounce);


        // 1.8 Скролл элементов субменю до видимой части
        
        // const hmCatLabelSubmenu = Array.from (document.querySelectorAll (".hm-cat--label__SUBMENU"));

        // hmCatLabelSubmenu.forEach ((v, i, a) => {
        //     a[i].addEventListener ("click", () => {   
        //         if (a[i].parentNode.scrollHeight > a[i].parentNode.offsetHeight) {

        //             let k = a[i].offsetTop - a[i].parentNode.scrollTop;
        //             let k1 = a[i].offsetTop + a[i].offsetHeight - a[i].parentNode.scrollTop;


        //             if (k < 0 && k1 > 0) {
        //                 a[i].parentNode.scrollTop = a[i].offsetTop;
        //             } else if (k < a[i].parentNode.offsetHeight && k1 > a[i].parentNode.offsetHeight) {
        //                 a[i].parentNode.scrollTop = a[i].parentNode.scrollTop + k1 - a[i].parentNode.offsetHeight;
        //             }
        //         }
        //     });
        // });




        // 2. СЛАЙДЕР КАРТОЧЕК ТОВАРОВ

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




        // 3. КНОПКИ ВЫБОРА ТОВАРА ДЛЯ СРАВНЕНИЯ ИЛИ В ИЗБРАННОЕ

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




        // 4. РАЗБИВКА ЧИСЕЛ В ЦЕННИКАХ ПО ТЫСЯЧАМ

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