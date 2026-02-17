
"use strict";



window.addEventListener ("load", function () {


    /* ---------- ********** |||||||||| СТРАНИЦЫ СТАТЬИ, НОВОСТИ, МЕРОПРИЯТИЯ |||||||||| ********** ---------- */


    if (document.querySelector ("#ar") || document.querySelector ("#ne") || document.querySelector ("#ev")) {


        // ОБЪЕКТЫ ДЛЯ ПРОСЛУШИВАНИЯ ПЕРЕХОДА ЧЕРЕЗ БРЕЙКПОИНТЫ

        const cdCommonMedia400 = window.matchMedia ("(min-width: 400px)");
        const cdCommonMedia511 = window.matchMedia ("(min-width: 511px)");
        const cdCommonMedia768 = window.matchMedia ("(min-width: 768px)");
        const cdCommonMedia1200 = window.matchMedia ("(min-width: 1200px)");
        const cdCommonMedia1440 = window.matchMedia ("(min-width: 1440px)");
        const cdCommonMedia1920 = window.matchMedia ("(min-width: 1920px)");

        
        /* ---------- ********** СЕКЦИЯ MAIN ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ БЛОКОВ ГАЛЕРЕИ (код взят со страницы Медиацентр)

        const mcPkButtonOpen = Array.from (document.querySelectorAll (".mc-pk--button__OPEN"));
        const mcPkDivBody = Array.from (document.querySelectorAll (".mc-pk--div__BODY"));
        const mcPkDivSwiper1 = document.querySelector (".mc-pk--div__SWIPER1");


        mcPkButtonOpen.forEach ((v, i, a) => {
            a[i].addEventListener ("click", () => {
                if (!mcPkDivBody[i].classList.contains ("__mc-pk--div__BODY")) {
                    mcPkDivBody[i].classList.add ("__mc-pk--div__BODY");
                    // mcPkDivBody.filter (x => x !== mcPkDivBody[i])[0].classList.remove ("__mc-pk--div__BODY");
                } else {
                    mcPkDivBody[i].classList.remove ("__mc-pk--div__BODY");
                }
                
            });
        });




        // 2. ГЛАВНЫЙ СЛАЙДЕР ГАЛЕРЕИ
        
        const mcPkDivSwiper1v = new Swiper (".mc-pk--div__SWIPER1", {
            effect: "fade",
            allowTouchMove: false,
            autoHeight: true,
        });


        // 2.1 Переключение слайдов через радиокнопки

        const mcPkLabelSubmenu = Array.from (document.querySelectorAll (".mc-pk--label__SUBMENU"));

        mcPkLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                mcPkDivSwiper1v.slideTo(i);
            });
        });


        // 2.2 Выбор первой радиокнопки в субменю при загрузке страницы

        mcPkLabelSubmenu[0].click ();


        /// 2.3 Выбор уже выбранного слайда при ресайзе для избежания бага с обрезанием главного слайдера

        function mcPkDebounce (cB, time) {
            let idTimer;
            return function () {
                clearTimeout (idTimer);
                idTimer = setTimeout (() => {
                    cB();
                }, time);
            }
        }

        const mcPk1Debounce = mcPkDebounce (() => {
            mcPkDivSwiper1v.slideTo (mcPkDivSwiper1v.activeIndex);
        }, 150);

        window.addEventListener ("resize", mcPk1Debounce);






        // 3. ВТОРОЙ ТИП КОНТЕНТА - ФОТОГАЛЕРЕЯ И ВИДЕОГАЛЕРЕЯ

        // Код взят из файла gallery.js, сам файл не поключен, поскольку логика и интерфейс отличаются 
        // от стандартной галереи
        // (нет модального окна, слайдер состоит не только из картинок, но и текста и т.д.)

        const cCommonDivGlrCont20 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"));

        // 3.1 Слайдеры с картинками

        const cCommonDivGlrCont2 = Array.from (document.querySelectorAll (".c-common--div__GLR_CONT2"), x => {
            return new Swiper (x.querySelector (".c-common--div__GLR_SWIPER"), {
                grabCursor: true,
                navigation: {
                    nextEl: x.querySelector (".c-common--button__GLR_RIGHT"),
                    prevEl: x.querySelector (".c-common--button__GLR_LEFT"),
                },
                pagination: {
                    el: x.querySelector (".c-common--div__GLR_SWIPER_PAGINATION"),
                    type: 'bullets',
                    clickable: true,
                },
            });
        });



        // 3.2 Копирование изображений в кнопки пагинации 
        // !!! (Это временное решение. При ИНТЕГРАЦИИ (если, конечно, нужно в превью загружать картинки меньшего разрешения)
        // пройтись по массиву cCommonDivGlrSwiperPagBuls
        // - это массив кнопок пагинации и загрузить изображения меньшего разрешения).

        
        
        setTimeout (() => {
            const cCommonImgGlrImages = Array.from (document.querySelectorAll (".c-common--img__GLR_IMAGE"));
            const cCommonDivGlrSwiperPagBuls = Array.from (document.querySelectorAll (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet"));

            cCommonImgGlrImages.forEach ((v, i, a) => {
                let clone = a[i].cloneNode (true);
                cCommonDivGlrSwiperPagBuls[i].append (clone);
            });
        }, 50);
        




        // 3.3 Автопрокрутка пагинации

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            a[i].on ("slideChange", () => {
                const cCommonDivGlrSwiperPag = cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION");
                const cCommonGlrSpanActive = cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION .swiper-pagination-bullet-active");

                if (cCommonGlrSpanActive.getBoundingClientRect().right > cCommonDivGlrSwiperPag.getBoundingClientRect().right) {
                    cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft + cCommonGlrSpanActive.offsetWidth - cCommonDivGlrSwiperPag.offsetWidth;
                } else if (cCommonGlrSpanActive.getBoundingClientRect().left < cCommonDivGlrSwiperPag.getBoundingClientRect().left) {
                    cCommonDivGlrSwiperPag.scrollLeft = cCommonGlrSpanActive.offsetLeft;
                }
            });
        });


        

        // 3.4 Если картинок больше 1, включить превью

        cCommonDivGlrCont2.forEach ((v, i, a) => {
            if (a[i].slides.length > 1) {
                cCommonDivGlrCont20[i].querySelector (".c-common--div__GLR_SWIPER_PAGINATION").style.display = "flex";
            }
        });


        


        // 4. СЛАЙДЕР ПРОДУКТЫ

        const cdRecDivSwiper = new Swiper (".cd-rec--div__SWIPER", {
            navigation: {
                nextEl: '.cd-rec--button__SWIPER_NEXT',
                prevEl: '.cd-rec--button__SWIPER_PREV',
            },
            breakpoints: {
                200: {
                    spaceBetween: 10,
                    slidesPerView: 1,
                },
            
                768: {
                    spaceBetween: 44,
                    slidesPerView: 2,
                },

                1200: {
                    spaceBetween: 44,
                    slidesPerView: 3,
                },

                1440: {
                    spaceBetween: 44,
                    slidesPerView: 3,
                },

                1920: {
                    spaceBetween: 44,
                    slidesPerView: 4,
                },
            },
        });




        // 4.1 Слайдер карточек товаров

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



        // 4.2 Кнопки выбора товара для сравнения или в избранное

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



        // 4.3 Разбивка чисел в ценниках по тысячам

        // ПРИ ЗАГРУЗКЕ КАРТОЧЕК С СЕРВЕРА ТАКЖЕ ВЫЗВАТЬ ЭТУ ФУНКЦИЮ !

        function hmCatPriceSplit () {
            const localFormat = new Intl.NumberFormat("ru-RU");

            const hmCatPrices = Array.from (document.querySelectorAll (".hm-cat--span__CARD_PRICE_CUR:first-of-type, .hm-cat--span__CARD_PRICE_OLD:first-of-type"));
            hmCatPrices.forEach ((v, i, a) => {
                a[i].textContent = `${localFormat.format (a[i].textContent)}`;
            });
        }

        hmCatPriceSplit ();




        
        // 5. СЛАЙДЕР ОТРАСЛИ
        
        const cdUseDivSwiper21 = new Swiper (".cd-use--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER21_NEXT',
                prevEl: '.cd-use--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 4,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });





        // 6. СЛАЙДЕР РЕШЕНИЯ
        
        const cdUseDivSwiper22 = new Swiper (".cd-use--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-use--button__SWIPER22_NEXT',
                prevEl: '.cd-use--button__SWIPER22_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
                1440: {
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },

                1920: {
                    slidesPerView: 1,
                    spaceBetween: 44,
                    slidesPerGroup: 1,
                },
            },
        });
    }
});