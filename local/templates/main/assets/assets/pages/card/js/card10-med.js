
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


        /* ---------- ********** СЕКЦИЯ MED ********** ---------- */


        // 1. ОТКРЫТИЕ / ЗАКРЫТИЕ СУБМЕНЮ 


        const cdMedDivHead = document.querySelector (".cd-med--div__HEAD");
        const cdMedSvgSubmenu = document.querySelector (".cd-med--svg__SUBMENU");
        const cdMedFormSubmenu = document.querySelector (".cd-med--form__SUBMENU");


        // 1.1 Выбор первой радиокнопки в субменю при загрузке страницы

        cdMedFormSubmenu.querySelector (".cd-med--label__SUBMENU:first-of-type").click ();
        

        cdMedDivHead.addEventListener ("click", () => {
        
            // 1.2 Открытие / закрытие субменю

            if (!cdMedFormSubmenu.classList.contains ("__cd-med--form__SUBMENU")) {
                cdMedFormSubmenu.classList.add ("__cd-med--form__SUBMENU");
                cdMedSvgSubmenu.classList.add ("__cd-med--svg__SUBMENU");
            } else {
                cdMedFormSubmenu.classList.remove ("__cd-med--form__SUBMENU");
                cdMedSvgSubmenu.classList.remove ("__cd-med--svg__SUBMENU");
            }
        });




        // 2. СЛАЙДЕР С КОНТЕНТОМ
        
        const cdMedDivSwiper2 = new Swiper (".cd-med--div__SWIPER2", {
            autoHeight: true,
            effect: "fade",
            allowTouchMove: false,
        });


        const cdMedLabelSubmenu = Array.from (document.querySelectorAll (".cd-med--label__SUBMENU"));

        cdMedLabelSubmenu.forEach ((v, i, a) => {
            a[i].addEventListener ("click", (e) => {
                cdMedDivSwiper2.slideTo(i);
            });
        });




        // 3. СЛАЙДЕР ВИДЕО
        
        const cdMedDivSwiper21 = new Swiper (".cd-med--div__SWIPER21", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER21_NEXT',
                prevEl: '.cd-med--button__SWIPER21_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 4. СЛАЙДЕР СТАТЬИ
        
        const cdMedDivSwiper22 = new Swiper (".cd-med--div__SWIPER22", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER22_NEXT',
                prevEl: '.cd-med--button__SWIPER22_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 5. СЛАЙДЕР НОВОСТИ

        const cdMedDivSwiper23 = new Swiper (".cd-med--div__SWIPER23", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER23_NEXT',
                prevEl: '.cd-med--button__SWIPER23_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 6. СЛАЙДЕР МЕРОПРИЯТИЯ

        const cdMedDivSwiper24 = new Swiper (".cd-med--div__SWIPER24", {
            navigation: {
                nextEl: '.cd-med--button__SWIPER24_NEXT',
                prevEl: '.cd-med--button__SWIPER24_PREV',
            },
            breakpoints: {
                200: {
                    slidesPerView: "auto",
                },
            
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 60,
                    slidesPerGroup: 1,
                }
            },
        });




        // 7. ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ СЛАЙДЕРОВ ВИДЕО, СТАТЕЙ, НОВОСТЕЙ, МЕРОПРИЯТИЙ

        if (cdCommonMedia1440.matches) {
            cdMedDivSwiper21.enable ();
            cdMedDivSwiper22.enable ();
            cdMedDivSwiper23.enable ();
            cdMedDivSwiper24.enable ();
        } else {
            cdMedDivSwiper21.disable ();
            cdMedDivSwiper22.disable ();
            cdMedDivSwiper23.disable ();
            cdMedDivSwiper24.disable ();
        }


        cdCommonMedia1440.addEventListener ("change", (e) => {
            if (e.matches) {
                cdMedDivSwiper21.enable ();
                cdMedDivSwiper22.enable ();
                cdMedDivSwiper23.enable ();
                cdMedDivSwiper24.enable ();
            } else {
                cdMedDivSwiper21.disable ();
                cdMedDivSwiper22.disable ();
                cdMedDivSwiper23.disable ();
                cdMedDivSwiper24.disable ();
            }
        });
    }
});